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

document.getElementById('send-button').addEventListener('click', sendMessage);
document.getElementById('user-input').addEventListener('keypress', function (e) {
    if (e.key === 'Enter') {
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

        // Call OpenAI API
        try {
            const response = await axios.post('https://api.openai.com/v1/engines/davinci-codex/completions', {
                prompt: `You are a therapist. Respond to the following message: ${messageText}`,
                max_tokens: 150,
                n: 1,
                stop: null,
                temperature: 0.7
            }, {
                headers: {
                    'Content-Type': 'application/json',
                    'Authorization': `THERAPIST_AI`
                }
            });

            const botMessageElement = document.createElement('div');
            botMessageElement.classList.add('message', 'bot-message');
            botMessageElement.textContent = response.data.choices[0].text.trim();

            document.getElementById('chat-box').appendChild(botMessageElement);
        } catch (error) {
            console.error('Error calling OpenAI API:', error);
        }
    }
}