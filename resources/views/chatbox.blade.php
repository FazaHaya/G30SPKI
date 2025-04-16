@extends('layouts.app')

@section('content')
<!-- Navbar -->
<nav class="bg-[#3e0d02] text-white py-4 shadow">
    <div class="container mx-auto px-4 sm:px-6 flex flex-wrap justify-between items-center">
        <a href="{{ route('home') }}" class="text-left leading-tight mb-2 sm:mb-0">
            <h1 class="text-xl font-bold">G30S</h1>
            <span class="text-sm font-semibold tracking-wide">Chronicles.<sup>®</sup></span>
        </a>

        <!-- Mobile Menu Button -->
        <div class="md:hidden">
            <button id="menu-toggle" class="focus:outline-none text-white">
                <svg class="w-6 h-6" fill="none" stroke="currentColor"
                    viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        stroke-width="2" d="M4 6h16M4 12h16M4 18h16">
                    </path>
                </svg>
            </button>
        </div>

        <!-- Menu Links -->
        <ul id="menu"
            class="w-full md:w-auto md:flex md:items-center space-y-4 md:space-y-0 md:space-x-8 text-md font-light hidden  mt-4 md:mt-0">
            <li><a href="{{ url('/') }}#tokoh" class="hover:text-red-300 block">History</a></li>
            <li><a href="{{ url('/') }}#quiz" class="hover:text-red-300 block">Quiz</a></li>
            <li><a href="{{ url('/') }}#contact" class="hover:text-red-300 block">Contact</a></li>
        </ul>

        <div class="mt-4 md:mt-0">
            <a href="{{ route('chatbox') }}"
                class="bg-white text-[#3e0d02] font-semibold text-sm py-2 px-4 rounded-md shadow-md hover:bg-gray-100 transition">
                Ask AI
            </a>
        </div>
    </div>
</nav>

<!-- Chat UI -->
<div class="min-h-[calc(100vh-80px)] flex flex-col bg-gray-100 px-4 sm:px-6 py-6">
    <!-- Chat Area -->
    <div id="chat-box"
        class="w-full max-w-4xl mx-auto flex-1 overflow-y-auto px-4 py-6 space-y-4 bg-white border border-gray-300 rounded-lg shadow-lg">
        <!-- Chat bubbles will be injected here -->
    </div>

    <!-- Input Form -->
    <form id="chat-form"
        class="w-full max-w-4xl mx-auto border-t bg-white px-4 py-3 flex gap-3 items-end sticky bottom-0">
        <textarea name="prompt" id="prompt" rows="1" placeholder="Tanyakan sesuatu..."
            class="flex-1 border border-gray-300 rounded-lg p-2 resize-none focus:outline-none focus:ring-2 focus:ring-[#3e0d02] text-gray-800"
            style="min-height: 2.5rem; max-height: 200px;"></textarea>
        <button type="submit"
            class="bg-[#3e0d02] text-white px-4 py-2 rounded hover:bg-red-900">Kirim</button>
    </form>
</div>

<script>
    // Toggle menu on mobile
    const menuToggle = document.getElementById('menu-toggle');
    const menu = document.getElementById('menu');
    menuToggle?.addEventListener('click', () => {
        menu.classList.toggle('hidden');
    });

    const chatBox = document.getElementById('chat-box');
    const form = document.getElementById('chat-form');
    const promptInput = document.getElementById('prompt');

    form.addEventListener('submit', async function (e) {
        e.preventDefault();

        const prompt = promptInput.value.trim();
        if (!prompt) return;

        const userWrapper = document.createElement('div');
        userWrapper.className = 'flex justify-start';
        const userBubble = document.createElement('div');
        userBubble.className = 'bg-blue-100 text-gray-800 p-3 rounded-xl max-w-[75%] shadow-md';
        userBubble.innerText = prompt;
        userWrapper.appendChild(userBubble);
        chatBox.appendChild(userWrapper);

        promptInput.value = '';
        promptInput.style.height = '2.5rem';

        const aiWrapper = document.createElement('div');
        aiWrapper.className = 'flex justify-end';
        const aiBubble = document.createElement('div');
        aiBubble.className = 'bg-green-100 text-gray-700 p-3 rounded-xl max-w-[75%] shadow-md italic';
        aiBubble.innerText = 'Sedang menjawab...';
        aiWrapper.appendChild(aiBubble);
        chatBox.appendChild(aiWrapper);

        chatBox.scrollTop = chatBox.scrollHeight;

        try {
            const res = await fetch('{{ route('chatbox.ask') }}', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': '{{ csrf_token() }}',
                },
                body: JSON.stringify({ prompt })
            });

            const data = await res.json();
            aiBubble.classList.remove('italic');
            aiBubble.innerText = data.answer;
        } catch (err) {
            aiBubble.innerText = 'Gagal mendapatkan jawaban.';
            aiBubble.classList.add('text-red-500');
        }

        chatBox.scrollTop = chatBox.scrollHeight;
    });

    // Auto resize textarea
    promptInput.addEventListener('input', function () {
        this.style.height = 'auto';
        this.style.height = (this.scrollHeight) + 'px';
    });
</script>
@endsection
