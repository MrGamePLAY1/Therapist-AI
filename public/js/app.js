document.addEventListener('DOMContentLoaded', function() {
    const text = "Hi {name}, Let's talk?";
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

document.getElementById('user-input').addEventListener('keypress', function (e) {
    if (e.key === 'Enter') {
        e.preventDefault(); // Prevent form submission
        sendMessage();
    }
});

async function sendMessage() {
    const userInput = document.getElementById('user-input');
    const messageText = userInput.value.trim();

    if (messageText !== '') {
        const userMessageElement = document.createElement('div');
        userMessageElement.classList.add('message', 'user-message');
        userMessageElement.textContent = messageText;

        document.getElementById('chat-box').appendChild(userMessageElement);
        userInput.value = '';

        // Call backend API
        try {
            const response = await axios.post('/api/chat', {
                message: messageText
            });

            const botMessageElement = document.createElement('div');
            botMessageElement.classList.add('message', 'bot-message');
            botMessageElement.textContent = response.data.choices[0].message.content.trim();

            document.getElementById('chat-box').appendChild(botMessageElement);
        } catch (error) {
            console.error('Error calling backend API:', error);
        }
    }
}