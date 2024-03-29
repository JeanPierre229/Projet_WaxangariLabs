<style>
    #search{
        border: 0; 
    }
    #bar{
        border-radius: 10px;
    }
    #h-bar{
        justify-content: space-between;
    }
    #profil{
        width: 30px;
        height: 30px;
        border-radius: 50%;
        border: px solid #fff;
        /* background-image: url("images/wax-person-04.png"); */
    }
    a[alt^='el_a']{
        text-decoration: none;
        color: black;
    }
    #person{
        background-color: rgb(238, 238, 238);
        border-radius: 20px;
    }
    #bouton{
        background-color: blue;
    }
</style>
<section class="container mx-auto">
    <!-- <div class="container mx-auto"> -->
        <div class="col-10 mx-5" id="h-bar">
            <div class="row">
                <div class="row border px-3 mt-3 me-5 col-4 text-start" id="bar">
                    <form action="#" method="post">
                        <input type="text" size="30%" name="search" id="search" placeholder="Rechercher un club de HandBall" class="fa fa-search py-2">
                    </form>
                    <span><i class="fa fa-search py-2"></i></span>
                </div>
                <div class="mx-5 mt-3 text-right col-7">
                    <span class="container text-right">
                        <i class="fa fa-bell-o px-1" style="font-size: 20px;"></i>
                        <i class="fa fa-comment-o px-1" style="font-size: 20px;"></i>
                    </span>
                    <span class="container text-right px-2">
                            <img src="images/profil-header.jpg" alt="" class="img" id="profil">
                    </span>
                    <span>
                        HandBall
                        <i class="fa fa-angle-down px-1" style="font-size: 20px;"></i>
                    </span>
                </div>
            </div>
        <!-- </div> -->
        <hr size="10px" height="10px">
    </div>
</section>