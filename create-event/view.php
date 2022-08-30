<!DOCTYPE html>
<html>
    <?php
        $title="Create Event";
        $site_description="Create a new event";
        require "../head.php";
    ?>
    <body>
        <?php require "../header.php"; ?>
        <main>
            <div class="title">
                <h1>Create an event</h1>
            </div>
            <div class="createform">
                <form action="" method="POST" enctype="multipart/form-data">
                    <div>
                        <label for="title">Title</label>
                        <input type="text" name="title" placeholder="Title">
                    </div>
                    <div>
                        <label for="image">Image</label>
                        <input type="file" name="image">
                    </div>
                    <div>
                        <label for="videolink">Video link</label>
                        <input type="url" name="videolink">
                    </div>
                    <div>
                        <label for="date">Date</label>
                        <input type="date" name="date">
                    </div>
                    <div>
                        <label for="info">Event info</label>
                        <textarea name="info" rows="4" cols="30"></textarea>
                    </div>
                    <div>
                        <label for="ticketslink">Tickets link</label>
                        <input type="url" name="ticketslink">
                    </div>
                    <div>
                        <input type="submit" value="Create event">
                    </div>
                </form>
            </div>
        </main>
        <?php require "../footer.php"; ?>
    </body>
</html>