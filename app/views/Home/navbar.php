<nav class="navbar fixed-top navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand">Welcome</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item">
                <a class="nav-link" href="/Home">Home <span class="sr-only">(current)</span></a>
            </li>
             <li class="nav-item">
                <a class="nav-link" href="/Home/">CPUs<span class="sr-only">(current)</span></a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="/Home/">GPUs<span class="sr-only">(current)</span></a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="/Home/">Motherboards<span class="sr-only">(current)</span></a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="/Home/">Cases<span class="sr-only">(current)</span></a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="/Home/">Power supply<span class="sr-only">(current)</span></a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="/Home/">RAM<span class="sr-only">(current)</span></a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="/Home/">Storage<span class="sr-only">(current)</span></a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="/Home/">PC Builds<span class="sr-only">(current)</span></a>
            </li>

    
            <?php
              if(isset($_SESSION['login_id']))
              {  ?>

            <li class="nav-item">
                <a class="nav-link" href="/Home/                                                                                                                                                                                                                    "><span class="sr-only">(current)</span></a>
            </li>
            
            <li class="nav-item">
                <a class="nav-link" href="/Home/"><span class="sr-only">(current)</span></a>
            </li>

            <li class="nav-item dropdown mr-sm-2"  >
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Profile
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="/Home/sendMessage">Send us a Message</a>
                </div>
            </li>

            <?php }?>

            <?php if(!isset($_SESSION['login_id'])
            )
            {
             ?>
            <li>
                <a class="nav-link" href="/Login/register">Sign Up <span class="sr-only">(current)</span></a>
            </li>

            <a class="nav-link" href="/Login/index">Log in <span class="sr-only">(current)</span></a>
             <?php }?>
        </ul>

    </div>
</nav>