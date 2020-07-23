<?php include '../include/header.php' ?>
<?php include '../include/menu.php' ?>


    <div class="page-header">
        <div class="container">
            <div class="row">
                <div class="col-md-7">
                    <h1>Video sections</h1>
                </div>
                <div class="col-md-5">
                    <ol class="breadcrumb pull-right">
                        <li><a href="index-2.html">Home</a></li>
                        <li><a href="categories.html">Tutorials</a></li>
                        <li class="active">Video</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

    <!-- Video list boxes: list -->
    <section class="content content-light  videos-list videos-list-list">
        <div class="container">

            <div class="filter">
                <a href="video-list.php" class="btn btn-theme navbar-btn btn-orange">All</a> &nbsp;
                <a href="english.php" class="btn btn-theme navbar-btn btn-lightblue">English </a>
                <a href="math.php" class="btn btn-theme navbar-btn btn-lightblue">Math</a>
                <a href="bangla.php" class="btn btn-theme navbar-btn btn-lightblue">Bangla</a>

            </div>

            <hr class="invisible" />


            <article class="row video-item">
                <div class="col-md-4">
                    <a href="video.html" class="video-prev video-prev-small"></a>
                    <p class="button-full"><a href="video.html" class="btn btn-theme btn-green"><i class="fa fa-play"></i> Watch the video <small>215 <i class="fa fa-heart"></i></small></a></p>
                </div>
                <div class="col-md-8">
                    <h3 class="video-title"><a href="video.html">How to draw a painting</a></h3>
                    <p class="video-description">handler has just finished his Graphic Design degree and enjoys continuing to learn from Monica and building his experience. Joey and Phoebe focus on bringing new business to the company. They have won a number of big clients recently and both also have qualifications in project management to ensure that the projects run smoothly from start to finish.</p>
                    <div class="row video-params">
                        <div class="col-md-4">
                            Author: <b>Joe Doe</b>
                        </div>
                        <div class="col-md-3">
                            Date: <b>13, Jan 2013</b>
                        </div>
                        <div class="col-md-3">
                            Category: <b>Drawing</b>
                        </div>

                    </div>
                </div>
            </article>

            <!-- Pagination -->
            <ul class="pagination">
                <li class="disabled"><a href="#"><i class="fa fa-angle-left"></i></a></li>
                <li class="active"><a href="videos-list.html">1 <span class="sr-only">(current)</span></a></li>
                <li><a href="#">2</a></li>
                <li><a href="#">3</a></li>
                <li><a href="#"><i class="fa fa-angle-right"></i></a></li>
            </ul>

        </div>
    </section>

<?php include '../include/footer.php' ?>