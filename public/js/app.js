document.addEventListener('DOMContentLoaded', function() {
    const text = "Hi {name}, Let's talk";
    const h3Element = document.querySelector('h3');
    let index = 0;

    function typeText() {
        if (index < text.length) {
            h3Element.textContent += text.charAt(index);
            index++;
            setTimeout(typeText, 100); // Adjust typing speed here
        }
    }

    typeText();
});

document.getElementById('send-button').addEventListener('click', sendMessage);
document.getElementById('user-input').addEventListener('keypress', function (e) {
    if (e.key === 'Enter') {
        sendMessage();
    }
});

function sendMessage() {
    const userInput = document.getElementById('user-input');
    const messageText = userInput.value.trim();

    if (messageText !== '') {
        const userMessageElement = document.createElement('div');
        userMessageElement.classList.add('message', 'user-message');
        userMessageElement.textContent = messageText;

        document.getElementById('chat-box').appendChild(userMessageElement);
        userInput.value = '';
        userInput.focus();

        // Scroll to the bottom of the chat box
        document.getElementById('chat-box').scrollTop = document.getElementById('chat-box').scrollHeight;

        // Simulate a response from the bot
        setTimeout(() => {
            const botMessageElement = document.createElement('div');
            botMessageElement.classList.add('message', 'bot-message');
            botMessageElement.textContent = 'This is a bot response.';
            document.getElementById('chat-box').appendChild(botMessageElement);

            // Scroll to the bottom of the chat box
            document.getElementById('chat-box').scrollTop = document.getElementById('chat-box').scrollHeight;
        }, 1000);
    }
}