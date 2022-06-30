    <?php
        require_once('../../database/functions.php');
        include ('../templates/eorg_header.php');
    ?>
    <link rel="stylesheet" href="/assets/css/eorg/home.css">
    <script src="/assets/js/eorganiser/ajax.js"></script>
    <div class="ajax-page">
    </div>
    <main id="home">
        <span class="major-line">Got a major event coming... ?</span>
        <section class="content">
            <div class="desc">
                <h2>Important Text</h2>
                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Id non nisi odio velit enim nihil placeat fuga! Lorem ipsum dolor sit, amet consectetur adipisicing elit. Id non nisi odio velit enim nihil placeat fuga! 
                <ul>
                    <li>Trail</li>
                    <li>Choose the event</li>
                    <li>Edit the event</li>
                    <li>Finish the attempt</li>
                </ul>
            </div>
            <div class="action">
                <div class="img l1"></div>
                <div class="button"><a href="event.php">Add Event</a></div>
            </div>
        </section>
        <span class="major-line">Edit your events details in the section below</span>
        <section class="content active">
            <div class="action">
                <div class="img l2"></div>
                <div class="button"><a href="event.php">Edit Event</a></div>
            </div>
            <div class="desc">
                <h2>Important Text</h2>
                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Id non nisi odio velit enim nihil placeat fuga! Lorem ipsum dolor sit, amet consectetur adipisicing elit. Id non nisi odio velit enim nihil placeat fuga! 
                <ul>
                    <li>Trail</li>
                    <li>Choose the event</li>
                    <li>Edit the event</li>
                    <li>Finish the attempt</li>
                </ul>
            </div>
        </section>
        <span class="major-line">Track tickets sales and all payments details</span>
        <section class="content">
            <div class="desc">
                <h2>Important Text</h2>
                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Id non nisi odio velit enim nihil placeat fuga! Lorem ipsum dolor sit, amet consectetur adipisicing elit. Id non nisi odio velit enim nihil placeat fuga! 
                <ul>
                    <li>Trail</li>
                    <li>Choose the event</li>
                    <li>Edit the event</li>
                    <li>Finish the attempt</li>
                </ul>
            </div>
            <div class="action">
                <div class="img l3"></div>
                <div class="button"><a href="track.php">Track Ticket Sales</a></div>
            </div>
        </section>
        <span class="major-line"></span>
    </main>
    <?php
        include ('../templates/eorg_footer.php');
    ?>