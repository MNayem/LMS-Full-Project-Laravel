<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>P2C- Plan2Career</title>

    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3"
      crossorigin="anonymous"
    />
  </head>
  <body>
    

    <section class="draggableSection my-2">
        <style>
          #bengal, #india, #padma, #sundarbans {
            cursor: pointer;
            padding: 0;
            width:100px;
            height:50px;
          }
          #droppable1, #droppable2, #droppable3, #droppable4 {
            border: 1px solid black;
            width: 100px;
            height: 30px;
            margin: -5px;
            padding: 0;
          }
        </style>  
      <div class="container">
        <div class="row">
          <div class="text-center"><h1> Passage </h1></div>
          <div> 
            <h4 style="text-align:justify">
            Bangladesh, to the east of India on the Bay of Bengal, is a South Asian country marked by lush greenery and many waterways. 
            Its Padma (Ganges), Meghna and Jamuna rivers create fertile plains, 
            and travel by boat is common. On the southern coast, the Sundarbans, an enormous mangrove forest shared with Eastern India, is home to the royal Bengal tiger.
            </h4> 
          </div>
        </div>
        <hr class="mb-5">
        
        
        <div class="row text-center">
          <div class="text-center"><h1> Fill In The Blanks </h1></div>
          <div id="bengal"><p>Bengal</p></div>
          <div id="padma"><p>Padma</p></div>
          <div id="sundarbans"><p>Sundarbans</p></div>
          <div id="india"><p>India</p></div>
        </div>
        <h3 style="text-align:justify">
            Bangladesh, to the east of 
            <div id="droppable1" style="display:inline-block;"><p></p></div>
            on the Bay of 
            <div id="droppable2" style="display:inline-block;"><p></p></div>
            , is a South Asian country marked by lush greenery and many waterways. 
            Its 
            <div id="droppable3" style="display:inline-block;"><p></p></div> 
            (Ganges), Meghna and Jamuna rivers create fertile plains, 
            and travel by boat is common. On the southern coast, the 
            <div id="droppable4" style="display:inline-block;"><p></p></div>
            , an enormous mangrove forest shared with Eastern India, is home to the royal Bengal tiger.
        </h3>
      <div class="text-center">
        <a class="btn btn-info fw-bold" href="/english">Back</a>
      </div>
      </div>
      
    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
    <script src="https://code.jquery.com/ui/1.13.1/jquery-ui.js"></script>

    <script>
      $(function () {
        $("#india,#bengal,#padma,#sundarbans").draggable({ revert: false });

        $("#droppable1").droppable({
          accept: "#india",
          drop: function (event, ui) {
            $(this).find("p").html("________").css("background-color","#66ff66");
          },
        });
        $("#droppable2").droppable({
          accept: "#bengal",
          drop: function (event, ui) {
            $(this).find("p").html("________").css("background-color","#66ff66");
          },
        });
        $("#droppable3").droppable({
          accept: "#padma",
          drop: function (event, ui) {
            $(this).find("p").html("________").css("background-color","#66ff66");
          },
        });
        $("#droppable4").droppable({
          accept: "#sundarbans",
          drop: function (event, ui) {
            $(this).find("p").html("________").css("background-color","#66ff66");
          },
        });
        
      });
    </script>
      
    </section>
    



    <section class="sortableSection my-5">

      <style>
        * {
          box-sizing: border-box;
        }
        
        body {
          background-color: #fff;
          display: flex;
          flex-direction: column;
          align-items: center;
          justify-content: flex-start;
          height: 100vh;
          margin: 0;
        }
        
        .draggable-list {
          border: 2px solid gray;
          padding: 0;
          list-style-type: none;
          font-size: 22px;
          font-weight: bold;
        }
        
        .draggable-list li {
          background-color: white;
          display: flex;
          flex: 1;
        }
        
        .draggable-list li:not(:last-of-type) {
          border-bottom: 2px solid gray;
        }
        
        .draggable-list .number {
          background-color: rgb(189, 189, 189);
          display: flex;
          align-items: center;
          justify-content: center;
          font-size: 28px;
          height: 50px;
          width: 50px;
        }
        
        .draggable-list li.over .draggable {
          background-color: yellow;
        }
        
        .draggable-list .person-name {
          margin: 0 20px 0 0;
          padding: 5%;
        }
        
        .draggable-list li.right .person-name {
          color: green;
        }
        
        .draggable-list li.wrong .person-name {
          color: red;
        }
        
        .draggable {
          cursor: pointer;
          display: flex;
          align-items: center;
          justify-content: space-between;
          padding: 0;
          flex: 1;
        }
        
        </style>
        
        <section class="rearrangeSection text-center">
          <ul class="draggable-list" id="draggable-list"></ul>
            <button id="check">Check Order</button>
        </section>
        
        <script>
        const draggable_list = document.getElementById('draggable-list');
        const check = document.getElementById('check');
        
        const richestPeople = [
          'ONE',
          'TWO',
          'THREE',
          'FOUR',
          'FIVE'
        ];
        
        // Store listitems
        const listItems = [];
        
        let dragStartIndex;
        
        createList();
        
        // Insert list items into DOM
        function createList() {
          [...richestPeople]
            .map(a => ({ value: a, sort: Math.random() }))
            .sort((a, b) => a.sort - b.sort)
            .map(a => a.value)
            .forEach((person, index) => {
              const listItem = document.createElement('li');
        
              listItem.setAttribute('data-index', index);
        
              listItem.innerHTML = `
                <span class="number">${index + 1}</span>
                <div class="draggable" draggable="true">
                  <p class="person-name">${person}</p>
                  <i class="fas fa-grip-lines"></i>
                </div>
              `;
        
              listItems.push(listItem);
        
              draggable_list.appendChild(listItem);
            });
        
          addEventListeners();
        }
        
        function dragStart() {
          // console.log('Event: ', 'dragstart');
          dragStartIndex = +this.closest('li').getAttribute('data-index');
        }
        
        function dragEnter() {
          // console.log('Event: ', 'dragenter');
          this.classList.add('over');
        }
        
        function dragLeave() {
          // console.log('Event: ', 'dragleave');
          this.classList.remove('over');
        }
        
        function dragOver(e) {
          // console.log('Event: ', 'dragover');
          e.preventDefault();
        }
        
        function dragDrop() {
          // console.log('Event: ', 'drop');
          const dragEndIndex = +this.getAttribute('data-index');
          swapItems(dragStartIndex, dragEndIndex);
        
          this.classList.remove('over');
        }
        
        // Swap list items that are drag and drop
        function swapItems(fromIndex, toIndex) {
          const itemOne = listItems[fromIndex].querySelector('.draggable');
          const itemTwo = listItems[toIndex].querySelector('.draggable');
        
          listItems[fromIndex].appendChild(itemTwo);
          listItems[toIndex].appendChild(itemOne);
        }
        
        // Check the order of list items
        function checkOrder() {
          listItems.forEach((listItem, index) => {
            const personName = listItem.querySelector('.draggable').innerText.trim();
        
            if (personName !== richestPeople[index]) {
              listItem.classList.add('wrong');
            } else {
              listItem.classList.remove('wrong');
              listItem.classList.add('right');
            }
          });
        }
        
        function addEventListeners() {
          const draggables = document.querySelectorAll('.draggable');
          const dragListItems = document.querySelectorAll('.draggable-list li');
        
          draggables.forEach(draggable => {
            draggable.addEventListener('dragstart', dragStart);
          });
        
          dragListItems.forEach(item => {
            item.addEventListener('dragover', dragOver);
            item.addEventListener('drop', dragDrop);
            item.addEventListener('dragenter', dragEnter);
            item.addEventListener('dragleave', dragLeave);
          });
        }
        
        check.addEventListener('click', checkOrder);
        
        </script> 

    </section>






    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
      crossorigin="anonymous"
    ></script>
  </body>
</html>

