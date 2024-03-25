<section class="offCanvasSection">
    <a class="btn btn-outline-success my-2 ml-2" data-bs-toggle="offcanvas" href="#offcanvasExample" role="button" aria-controls="offcanvasExample">
        &#9776;
    </a>
    
    <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">
      <div class="offcanvas-header">
        <h5 class="offcanvas-title" id="offcanvasExampleLabel">List Of Word Meaning</h5>
        <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
      </div>
      <div class="offcanvas-body">
        
    <nav id="navbar" class="navbar order-last order-lg-0">
        <ul style="display:inline-block;">
            
          <li class="nav-item dropdown">
            <a style="font-size:1.1rem" class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Word Meaning
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              <li><a style="font-size:1.1rem" class="dropdown-item {{'peopleAndRelationship'==request()->path()?'active':''}}" href="/peopleAndRelationship">People And Relationship</a></li>
              <li><a style="font-size:1.1rem" class="dropdown-item {{'family'==request()->path()?'active':''}}" href="/english">Family</a></li>
              <li><a style="font-size:1.1rem" class="dropdown-item {{'theHumanBody'==request()->path()?'active':''}}" href="#">The Human Body</a></li>
              <li><a style="font-size:1.1rem" class="dropdown-item {{'vegetables'==request()->path()?'active':''}}" href="#">Vegetables</a></li>
            </ul>
          </li>
          
          <li><a style="font-size:1.1rem" class="{{'fillGap'==request()->path()?'active':''}}" href="/fillGap">Fill in the Gaps</a></li>
          <li><a style="font-size:1.1rem" class="{{'rearrange'==request()->path()?'active':''}}" href="/fillGap">Rearrange</a></li>

          


        </ul>
    </nav>
        
      </div>
    </div>
</section>