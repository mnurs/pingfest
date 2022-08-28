<html>
    <head>
    </head>
    <body>
        <h2>Pembayaran Diterima</h2>
        <div><b>Waktu:</b> <?php echo date('r'); ?></div>
        <div><b>User ID:</b> <?php echo htmlspecialchars($user_id); ?></div>
        <div><b>Event:</b> <?php echo htmlspecialchars($event_name); ?></div>
        <div><b>Invoice:</b> <?php echo rupiah($invoice); ?></div>
        <p>
            Pembayaran anda telah diterima oleh administrator kami.
            Anda dapat melanjutkan prosedur berikutnya dengan mengisi identitas keikutsertaan anda pada event ini pada halaman profil anda
        </p>
        <?php 
            if(htmlspecialchars($event_name) == "Esport (ITV)"){
                echo "<p>Harap klik atau salin link berikut untuk gabung ke group whatsapp <a href='https://chat.whatsapp.com/F6yvTwgAIf43IDuclenMTj'>https://chat.whatsapp.com/F6yvTwgAIf43IDuclenMTj</a></p>";
            }
        ?>
        <p>Anda dapat mengakses profil anda di <a href="<?php echo $profile_url; ?>"><?php echo $profile_url; ?></a> (harap login terlebih dahulu)</p>
    </body>
</html>
