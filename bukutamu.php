<html>
    <head>
        <title> Guestbook by Kelompok 1</title>
        <link rel='stylesheet' href='buku.css'/>
        <style>body { max-width: 500px; margin: auto; }</style>
    </head>
    <body>
   
        <div class='title' align='center'>
            <big> Guestbook Kelompok 1</big><br/>
            by: <a href='tampilanlogin.html'>websiteku</a>
        </div>

        <div class='gmenu'>
            <form action='post.php' method='post'>
                Nama : <input type='text' name='nama'/> <br/>
                Web : <input type='text' name='web' value='http://'/> <br/>
                Pesan : <input type='text' name='pesan'/> <br/>
                <input type='submit' value='kirim'/>
            </form>
        </div>
       
        <div class='maintxt'>
            <?php

                if(file_exists("db.html") && filesize("db.html") > 0){
                    $handle = fopen("db.html", "r");
                    $contents = fread($handle, filesize("db.html"));
                    fclose($handle);
                   
                    echo "$contents";
                }
                else {
                    echo "<div class='alarm'>no messages!<br/>be the first!</div>";
                }

            ?>
        </div>
       
        <div class='footer' align='center'>
            Copyright &copy; <a href='tampilanlogin.html'>websiteku</a> 2013
        </div>
   
    </body>
</html>