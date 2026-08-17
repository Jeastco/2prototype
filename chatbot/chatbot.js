// ===== ADS NYANZA CHATBOT =====
class AdsNyanzaChatbot {
    constructor() {
        this.messages = [];
        this.isMinimized = false;
        this.isOpen = false;
        this.messageCount = 0;
        this.maxMessages = 50;
        
        // Initialize
        this.initEventListeners();
        this.loadHistory();
    }

    // ===== TOGGLE FUNCTIONS =====
    toggle() {
        const window = document.getElementById('chat-window');
        this.isOpen = !this.isOpen;
        
        if (this.isOpen) {
            window.classList.remove('hidden');
            window.classList.remove('minimized');
            document.getElementById('user-input').focus();
            document.querySelector('.notification-badge').style.display = 'none';
        } else {
            window.classList.add('hidden');
        }
    }

    minimize() {
        const window = document.getElementById('chat-window');
        this.isMinimized = !this.isMinimized;
        window.classList.toggle('minimized');
    }

    // ===== MESSAGE HANDLING =====
    async sendMessage(message = null) {
        const input = document.getElementById('user-input');
        const text = message || input.value.trim();
        
        if (!text) return;
        if (this.messageCount >= this.maxMessages) {
            this.addMessage('⚠️ Maximum messages reached. Refresh to continue.', 'bot');
            return;
        }

        this.messageCount++;
        this.addMessage(text, 'user');
        input.value = '';
        input.disabled = true;
        document.getElementById('send-btn').disabled = true;

        this.showTyping();

        try {
            const response = await this.getAIResponse(text);
            this.hideTyping();
            this.addMessage(response, 'bot');
            this.saveHistory();
        } catch (error) {
            this.hideTyping();
            this.addMessage('Sorry, I encountered an error. Please try again.', 'bot');
        }

        input.disabled = false;
        document.getElementById('send-btn').disabled = false;
        input.focus();
    }

    async getAIResponse(message) {
        // Simple response system
        const responses = {
            'advertise': '🎯 Great! Ads Nyanza offers comprehensive advertising solutions:\n\n• Digital Marketing\n• Billboard Advertising\n• Radio & TV Ads\n• Social Media Management\n• Content Creation\n\nWould you like a free consultation?',
            'services': '📋 Our services include:\n\n1. 💻 Digital Advertising\n2. 📺 Traditional Media Ads\n3. 📱 Social Media Marketing\n4. 🎨 Creative Design\n5. 📊 Analytics & Reporting\n\nWhich service interests you?',
            'about': '🏢 Ads Nyanza is a leading advertising agency in East Africa, specializing in innovative marketing solutions since 2015.',
            'price': '💰 Our pricing is customized based on your needs. Contact us for a detailed quote!',
            'contact': '📞 Get in touch with Ads Nyanza:\n\n• Phone: +254 700 123 456\n• Email: info@adsnyanza.com\n• Location: Nairobi, Kenya',
            'help': '🆘 How can I help you?\n\nAsk me about:\n• Services\n• Advertising\n• Pricing\n• Contact',
            'default': 'Thank you for your message! Our Ads Nyanza team will assist you shortly.'
        };

        const lowerMessage = message.toLowerCase();
        for (let [key, response] of Object.entries(responses)) {
            if (lowerMessage.includes(key)) {
                return response;
            }
        }
        return responses.default;
    }

    // ===== UI METHODS =====
    addMessage(text, sender) {
        const messagesContainer = document.getElementById('chat-messages');
        const messageDiv = document.createElement('div');
        messageDiv.className = `message ${sender}-message`;
        
        const avatar = document.createElement('div');
        avatar.className = 'message-avatar';
        if (sender === 'bot') {
            avatar.innerHTML = `<img src="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='32' height='32' viewBox='0 0 32 32'%3E%3Crect width='32' height='32' rx='16' fill='%2328A745'/%3E%3Ctext x='16' y='21' text-anchor='middle' font-size='16' fill='%23ffffff'%3E🤖%3C/text%3E%3C/svg%3E" alt="Bot">`;
        } else {
            avatar.innerHTML = `<img src="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='32' height='32' viewBox='0 0 32 32'%3E%3Crect width='32' height='32' rx='16' fill='%2328A745'/%3E%3Ctext x='16' y='21' text-anchor='middle' font-size='16' fill='%23ffffff'%3E👤%3C/text%3E%3C/svg%3E" alt="User">`;
        }
        
        const content = document.createElement('div');
        content.className = 'message-content';
        
        const textDiv = document.createElement('div');
        textDiv.className = 'message-text';
        textDiv.innerHTML = this.formatMessage(text);
        
        const time = document.createElement('div');
        time.className = 'message-time';
        time.textContent = new Date().toLocaleTimeString([], { hour: '2-digit', minute: '2-digit' });
        
        content.appendChild(textDiv);
        content.appendChild(time);
        messageDiv.appendChild(avatar);
        messageDiv.appendChild(content);
        
        // Remove quick replies on user message
        if (sender === 'user') {
            const quickReplies = document.querySelector('.quick-replies');
            if (quickReplies) quickReplies.remove();
        }
        
        messagesContainer.appendChild(messageDiv);
        messagesContainer.scrollTop = messagesContainer.scrollHeight;
        
        this.messages.push({ text, sender, timestamp: new Date().toISOString() });
    }

    formatMessage(text) {
        return text.replace(/\n/g, '<br>').replace(/\*\*(.*?)\*\*/g, '<strong>$1</strong>');
    }

    showTyping() {
        document.getElementById('typing-indicator').style.display = 'flex';
        const container = document.getElementById('chat-messages');
        container.scrollTop = container.scrollHeight;
    }

    hideTyping() {
        document.getElementById('typing-indicator').style.display = 'none';
    }

    // ===== STORAGE =====
    saveHistory() {
        try {
            localStorage.setItem('adsnyanza_chat_history', JSON.stringify(this.messages));
        } catch (e) {}
    }

    loadHistory() {
        try {
            const stored = localStorage.getItem('adsnyanza_chat_history');
            if (stored) {
                this.messages = JSON.parse(stored);
                this.messages.forEach(msg => {
                    this.addMessage(msg.text, msg.sender);
                });
            }
        } catch (e) {}
    }

    clearHistory() {
        localStorage.removeItem('adsnyanza_chat_history');
        this.messages = [];
        this.messageCount = 0;
        document.getElementById('chat-messages').innerHTML = '';
        this.addWelcomeMessage();
    }

    addWelcomeMessage() {
        this.addMessage('👋 Hello! Welcome to <strong>Ads Nyanza</strong> AI Assistant. How can I help you today?', 'bot');
        this.showQuickReplies();
    }

    showQuickReplies() {
        const container = document.getElementById('chat-messages');
        const quickDiv = document.createElement('div');
        quickDiv.className = 'quick-replies';
        quickDiv.id = 'quick-replies';
        
        const replies = [
            { icon: 'fa-info-circle', text: 'Tell me about Ads Nyanza' },
            { icon: 'fa-briefcase', text: 'What services do you offer?' },
            { icon: 'fa-ad', text: 'How can I advertise?' },
            { icon: 'fa-headset', text: 'Contact support' }
        ];
        
        replies.forEach(reply => {
            const btn = document.createElement('button');
            btn.className = 'quick-reply-btn';
            btn.innerHTML = `<i class="fas ${reply.icon}"></i> ${reply.text}`;
            btn.onclick = () => this.sendQuickReply(reply.text);
            quickDiv.appendChild(btn);
        });
        
        container.appendChild(quickDiv);
        container.scrollTop = container.scrollHeight;
    }

    sendQuickReply(text) {
        document.getElementById('user-input').value = text;
        this.sendMessage();
    }

    // ===== FILE HANDLING =====
    attachFile() {
        document.getElementById('file-input').click();
    }

    handleFileUpload(event) {
        const file = event.target.files[0];
        if (!file) return;
        
        if (file.size > 5 * 1024 * 1024) {
            this.addMessage('⚠️ File too large. Max 5MB.', 'bot');
            return;
        }
        
        this.addMessage(`📎 File: ${file.name}`, 'user');
        event.target.value = '';
    }

    toggleEmojiPicker() {
        const input = document.getElementById('user-input');
        const emojis = ['😊', '👍', '❤️', '🔥', '💡', '🎯', '📊', '💼', '🤝', '✨'];
        input.value += emojis[Math.floor(Math.random() * emojis.length)];
        input.focus();
    }

    handleKeyPress(event) {
        if (event.key === 'Enter' && !event.shiftKey) {
            event.preventDefault();
            this.sendMessage();
        }
    }

    initEventListeners() {
        window.addEventListener('beforeunload', () => {
            this.saveHistory();
        });
    }
}

// ===== INITIALIZE =====
const chatbot = new AdsNyanzaChatbot();

// Global functions
function toggleChat() { chatbot.toggle(); }
function minimizeChat() { chatbot.minimize(); }
function sendMessage() { chatbot.sendMessage(); }
function handleKeyPress(event) { chatbot.handleKeyPress(event); }
function sendQuickReply(text) { chatbot.sendQuickReply(text); }
function attachFile() { chatbot.attachFile(); }
function handleFileUpload(event) { chatbot.handleFileUpload(event); }
function toggleEmojiPicker() { chatbot.toggleEmojiPicker(); }
function clearChat() { 
    if (confirm('Clear chat history?')) {
        chatbot.clearHistory();
    }
}