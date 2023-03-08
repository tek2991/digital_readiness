<div id="m1l3s6" class="pt-36 {{ $current_slide ? 'min-h-screen' : '' }}">
    <h3 class="font-intelmedium text-gray-500 text-lg pb-4">Activity: Match the following</h3>
    <div class="border-b-2 border-secondary w-fit">
        <h1 class="font-intelbold text-intelblue text-3xl pb-2">Which is an example of AI and which one is not?</h1>
    </div>
    <div class="text-gray-700 mt-14">
        <div class="grid grid-cols-2 gap-3">
            <div class="w-full h-full cursor-move p-1 flex flex-col justify-between border-4 rounded-lg bg-gray-200">
                <img id="question1" src="{{ asset('images/course/prediction.png') }}" alt=""
                    class="question h-full w-full object-contain object-center rounded-lg {{ $qa_states['answer2'] ? 'opacity-0' : '' }}">
                <p class="text-center {{ $qa_states['question1'] == 1 ? 'opacity-0' : '' }}">
                    Word suggestions while typing
                </p>
            </div>
            <div class="w-full h-full cursor-move p-1 flex flex-col justify-between border-4 rounded-lg bg-gray-200">
                <img id="question2" src="{{ asset('images/course/translate.png') }}" alt=""
                    class="question h-full max-h-64 w-full object-contain object-center rounded-lg {{ $qa_states['answer1'] ? 'opacity-0' : '' }}">
                <p class="text-center {{ $qa_states['question2'] == 1 ? 'opacity-0' : '' }}">
                    Translating words from one language to another
                </p>
            </div>
            <div id="answer1"
                class="answer bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700 {{ $qa_states['answer1'] == 1 ? 'flex flex-col justify-between' : 'flex flex-col justify-center' }}" style="min-height: 20rem">
                <div>
                    @if ($qa_states['answer1'] == 1)
                        <img class="rounded-t-lg mx-auto" src="{{ asset('images/course/translate.png') }}" alt="" />
                    @endif
                </div>
                <div class="p-5">
                    <h5
                        class="mb-2 text-xl font-intelsemibold tracking-tight text-gray-900 dark:text-white {{ $qa_states['answer1'] == 1 ? '' : 'text-center' }}">
                        {{ $qa_states['answer1'] == true ? 'Translating words from one language to another' : 'Not an AI application' }}
                    </h5>
                    @if ($qa_states['answer1'] == true)
                        <p class="mb-3 font-sm text-gray-700 dark:text-gray-400">
                            Translating words through a table is not an example of AI. But making a translator that is
                            able to understand context and verbs to a certain degree can be considered AI.
                        </p>
                    @endif
                </div>
            </div>
            <div id="answer2"
                class="answer bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700 {{ $qa_states['answer2'] == 1 ? 'flex flex-col justify-between' : 'flex flex-col justify-center' }}" style="min-height: 20rem">
                <div>
                    @if ($qa_states['answer2'] == 1)
                        <img class="rounded-t-lg mx-auto" src="{{ asset('images/course/prediction.png') }}" alt="" />
                    @endif
                </div>
                <div class="p-5">
                    <h5
                        class="mb-2 text-xl font-intelsemibold tracking-tight text-gray-900 dark:text-white {{ $qa_states['answer2'] == 1 ? '' : 'text-center' }}">
                        {{ $qa_states['answer2'] == true ? 'Word suggestions while typing' : 'An AI application' }}
                    </h5>
                    @if ($qa_states['answer2'] == true)
                        <p class="mb-3 font-sm text-gray-700 dark:text-gray-400">
                            Yes. This is an example of AI, because it is using data from the past and from the sentence
                            to understand the ideal words to suggest.
                        </p>
                    @endif
                </div>
            </div>
        </div>
    </div>
    <div class="mt-14">
        @if ($allow_next && $show_next)
            <button wire:click="nextSlide" {{ $complete == true ? '' : 'disabled' }}
                class="{{ $complete == true ? 'bg-intelblue animate-bounce' : 'bg-gray-400' }} text-white font-intelmedium text-xl p-4 rounded-lg lg:mt-6 w-full">
                {{ $complete == true ? 'Get your first badge...' : 'Please complete the avtivity above' }}
            </button>
        @else
        @endif
    </div>

    {{ 'q1: ' . $qa_states['question1'] . ' q2: ' . $qa_states['question2'] . ' a1: ' . $qa_states['answer1'] . ' a2: ' . $qa_states['answer2'] }}

    <div class="hidden">
        <button wire:click="correct('question1', 'answer2')" id="qb1"></button>
        <button wire:click="correct('question2', 'answer1')" id="qb2"></button>
    </div>

    <script>
        function setupQuestionDragAndDrop(questions, answers, correctMatches) {
            // Store a reference to the currently dragged question
            let currentQuestion = null;

            // Set up dragstart event listener for each question element
            questions.forEach(question => {
                question.addEventListener('dragstart', (event) => {
                    currentQuestion = event.target;
                    // console.log(currentQuestion.id)
                });
            });

            // Set up dragover event listener for each answer element
            answers.forEach(answer => {
                answer.addEventListener('dragover', (event) => {
                    event.preventDefault();
                    console.log(currentQuestion.id, answer.id)
                });

                // Set up drop event listener for each answer element
                answer.addEventListener('drop', (event) => {
                    event.preventDefault();

                    // Check if the dropped question matches the answer
                    if (correctMatches[currentQuestion.id] === answer.id) {
                        // If the answer is correct, update the display to reflect that
                        answer.classList.add('border-3', 'border-green-600', 'shadow-lg',
                            'shadow-green-500');
                        // currentQuestion.classList.add('');

                        // get the id of the question after the word question
                        let q = currentQuestion.id.slice(8);
                        // call the correct method
                        document.getElementById('qb' + q).click();
                    } else {
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
            'question2': 'answer1',
        };

        // Set up the drag and drop functionality
        // document.addEventListener("DOMContentLoaded", 
        //     setupQuestionDragAndDrop(questions, answers, correctMatches)
        // );
        // call adjustHeight
        setTimeout(setupQuestionDragAndDrop(questions, answers, correctMatches), 100);
    </script>
</div>
