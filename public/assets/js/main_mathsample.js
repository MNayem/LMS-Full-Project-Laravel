(function(){
  // Functions
  function buildQuiz(){
    // variable to store the HTML output
    const output = [];

    // for each question...
    myQuestions.forEach(
      (currentQuestion, questionNumber) => {

        // variable to store the list of possible answers
        const answers = [];

        // and for each available answer...
        for(letter in currentQuestion.answers){

          // ...add an HTML radio button
          answers.push(
            `<label>
              <input type="radio" name="question${questionNumber}" value="${letter}">
              ${letter} :
              ${currentQuestion.answers[letter]}
            </label>`
          );
        }

        // add this question and its answers to the output
        output.push(
          `<div class="slide">
            <div class="question"> ${currentQuestion.question} </div>
            <div class="answers"> ${answers.join("")} </div>
          </div>`
        );
      }
    );

    // finally combine our output list into one string of HTML and put it on the page
    quizContainer.innerHTML = output.join('');
  }

  function showResults(){

    // gather answer containers from our quiz
    const answerContainers = quizContainer.querySelectorAll('.answers');

    // keep track of user's answers
    let numCorrect = 0;

    // for each question...
    myQuestions.forEach( (currentQuestion, questionNumber) => {

      // find selected answer
      const answerContainer = answerContainers[questionNumber];
      const selector = `input[name=question${questionNumber}]:checked`;
      const userAnswer = (answerContainer.querySelector(selector) || {}).value;

      // if answer is correct
      if(userAnswer === currentQuestion.correctAnswer){
        // add to the number of correct answers
        numCorrect++;

        // color the answers green
        answerContainers[questionNumber].style.color = 'lightgreen';
      }
      // if answer is wrong or blank
      else{
        // color the answers red
        answerContainers[questionNumber].style.color = 'red';
      }
    });

    // show number of correct answers out of total
    resultsContainer.innerHTML = `${numCorrect} out of ${myQuestions.length}`;
  }

  function showSlide(n) {
    slides[currentSlide].classList.remove('active-slide');
    slides[n].classList.add('active-slide');
    currentSlide = n;
    if(currentSlide === 0){
      previousButton.style.display = 'none';
    }
    else{
      previousButton.style.display = 'inline-block';
    }
    if(currentSlide === slides.length-1){
      nextButton.style.display = 'none';
      submitButton.style.display = 'inline-block';
    }
    else{
      nextButton.style.display = 'inline-block';
      submitButton.style.display = 'none';
    }
  }

  function showNextSlide() {
    showSlide(currentSlide + 1);
  }

  function showPreviousSlide() {
    showSlide(currentSlide - 1);
  }

  // Variables
  const quizContainer = document.getElementById('quiz');
  const resultsContainer = document.getElementById('results');
  const submitButton = document.getElementById('submit');
  var myQuestions = [
    {
     question: "1. Who introduces Venn Diagram First?",
      answers: {
        a: "Newton",
        b: "Pythagoras",
        c: "Jogn Venn",
        d: "Fleming"
      },
      correctAnswer: "c"
    },
    {
      question: "2. Pythagoras theorem is about which tringle?",
      answers: {
        a: "Equiletaral",
        b: "Circle",
        c: "Right Angled",
        d: "All"
      },
      correctAnswer: "c"
    },
    {
     question: "3. What is the capital of Bangladesh?",
      answers: {
        a: "Khulna",
        b: "Barishal",
        c: "Rajshahi",
        d: "Dhaka"
      },
      correctAnswer: "d"
    },
    {
     question: "4. Which one is a vowel?",
      answers: {
        a: "A",
        b: "R",
        c: "D",
        d: "Y"
      },
      correctAnswer: "a"
    },
    {
     question: "5. How many types of set are there?",
      answers: {
        a: "3",
        b: "2",
        c: "4",
        d: "none"
      },
      correctAnswer: "b"
    },
    {
     question: "6. What is right angled tringle?",
      answers: {
        a: "equal side",
        b: "equal angle",
        c: "one angle 90 degree",
        d: "none"
      },
      correctAnswer: "c"
    },
    {
     question: "7. In which year Venn diagram was introduced?",
      answers: {
        a: "1963",
        b: "1973",
        c: "1863",
        d: "1883"
      },
      correctAnswer: "d"
    },
    {
     question: "8. How many types of ratios are there in Trigonomitry?",
      answers: {
        a: "4",
        b: "6",
        c: "5",
        d: "8"
      },
      correctAnswer: "b"
    },
    {
     question: "9. Who is the best cricketer in Bangladesh?",
      answers: {
        a: "Shakib",
        b: "Tamim",
        c: "Mushfiq",
        d: "Mashrafee"
      },
      correctAnswer: "a"
    },
    {
     question: "10. What do you mean by Geometry?",
      answers: {
        a: "Angles",
        b: "Sides",
        c: "Nothing except graphs",
        d: "none"
      },
      correctAnswer: "c"
    },
  ];

  // Kick things off
  buildQuiz();

  // Pagination
  const previousButton = document.getElementById("previous");
  const nextButton = document.getElementById("next");
  const slides = document.querySelectorAll(".slide");
  let currentSlide = 0;

  // Show the first slide
  showSlide(currentSlide);

  // Event listeners
  submitButton.addEventListener('click', showResults);
  previousButton.addEventListener("click", showPreviousSlide);
  nextButton.addEventListener("click", showNextSlide);
})();
