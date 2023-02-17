<div id="m1l4s4" class="pt-36 {{ $current_slide ? 'min-h-screen' : '' }}">
    <h3 class="font-intelmedium text-gray-500 text-lg pb-4">Activity: Match the following</h3>
    <div class="border-b-2 border-secondary w-fit">
        <h1 class="font-intelbold text-intelblue text-3xl pb-2">Match the everyday uses of AI with its correct name</h1>
    </div>
    <div class="text-gray-700 mt-14" wire:ignore>
        <div class="grid grid-cols-2 gap-3 md:grid-cols-3 md:gap-y-8">
            <div class="order-1 md:order-1 w-full h-full cursor-move p-1">
                <img id="question1" src="{{ asset('images/course/baby.jpg') }}" alt=""
                    class="question h-full w-full object-contain object-center">
            </div>
            <div class="order-3 md:order-2 w-full h-full cursor-move p-1">
                <img id="question2" src="{{ asset('images/course/map.gif') }}" alt=""
                    class="question h-full max-h-64 w-full object-contain object-center">
            </div>
            <div class="order-5 md:order-3 w-full h-full cursor-move p-1">
                <img id="question3" src="{{ asset('images/course/youtube.png') }}" alt=""
                    class="question h-full w-full object-contain object-center">
            </div>
            <div id="answer1"
                class="answer order-2 md:order-4 w-full h-full flex justify-between items-center bg-intellight rounded-lg text-md p-3 md:text-xl">
                <p class="text-center">Recommendation System –YouTube video suggestions</p>
            </div>
            <div id="answer2"
                class="answer order-4 md:order-5 w-full h-full flex justify-between items-center bg-intellight rounded-lg text-md p-3 md:text-xl">
                <p class="text-center">Digital Assistants – Alexa, Siri, etc.</p>
            </div>
            <div id="answer3"
                class="answer order-6 md:order-6 w-full h-full flex justify-between items-center bg-intellight rounded-lg text-md p-3 md:text-xl">
                <p class="text-center">Navigation – Google Maps </p>
            </div>
        </div>
    </div>
    <div class="mt-14">
        @if ($allow_next && $show_next)
            <button wire:click="nextSlide" {{ $complete == true ? '' : 'disabled' }}
                class="{{ $complete == true ? 'bg-intelblue animate-bounce' : 'bg-gray-400' }} text-white font-intelmedium text-xl p-4 rounded-lg lg:mt-6 w-full">
                {{ $complete == true ? 'Next Module...' : 'Please complete the video above' }}
            </button>
        @else
        @endif
    </div>

    <div class="hidden">
        <button wire:click="correct('question1', 'answer2')" id="qb1"></button>
        <button wire:click="correct('question2', 'answer3')" id="qb2"></button>
        <button wire:click="correct('question3', 'answer1')" id="qb3"></button>
    </div>

    <script>
        function setupQuestionDragAndDrop(questions, answers, correctMatches) {
            // Store a reference to the currently dragged question
            let currentQuestion = null;

            // Set up dragstart event listener for each question element
            questions.forEach(question => {
                question.addEventListener('dragstart', (event) => {
                    currentQuestion = event.target;
                    console.log(event.target)
                });
            });

            // Set up dragover event listener for each answer element
            answers.forEach(answer => {
                answer.addEventListener('dragover', (event) => {
                    event.preventDefault();
                });

                // Set up drop event listener for each answer element
                answer.addEventListener('drop', (event) => {
                    event.preventDefault();

                    // Check if the dropped question matches the answer
                    if (correctMatches[currentQuestion.id] === answer.id) {
                        // If the answer is correct, update the display to reflect that
                        answer.classList.add('border-3', 'border-green-600', 'shadow-lg', 'shadow-green-500');
                        // currentQuestion.classList.add('');

                        // get the id of the question after the word question
                        let q = currentQuestion.id.slice(8);
                        // call the correct method
                        document.getElementById('qb' + q).click();
                    }else{
                        // currentQuestion.classList.add('shadow-lg', 'shadow-red-500');
                    }
                });
            });

        }

        // Get references to the question and answer elements
        const questions = Array.from(document.querySelectorAll('.question'));
        const answers = Array.from(document.querySelectorAll('.answer'));

        // Define the correct matches
        const correctMatches = {
            'question1': 'answer2',
            'question2': 'answer3',
            'question3': 'answer1'
        };

        // Set up the drag and drop functionality
        // document.addEventListener("DOMContentLoaded", 
        //     setupQuestionDragAndDrop(questions, answers, correctMatches)
        // );
        // call adjustHeight
        setTimeout(setupQuestionDragAndDrop(questions, answers, correctMatches), 100);
    </script>
</div>
