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
                echo "<p>(Khusus KAPTEN) Harap klik atau salin link berikut untuk bergabung ke grup WhatsApp <a href='https://chat.whatsapp.com/F6yvTwgAIf43IDuclenMTj'>https://chat.whatsapp.com/F6yvTwgAIf43IDuclenMTj</a></p>";
            }else if(htmlspecialchars($event_name) == "Battle of Technology (ITV)"){
                echo "<p>(Khusus KAPTEN) Harap klik atau salin link berikut untuk bergabung ke grup WhatsApp <a href='https://chat.whatsapp.com/GEj6D5AI98lHdn9R3vGYNF'>https://chat.whatsapp.com/GEj6D5AI98lHdn9R3vGYNF</a></p>";
            }else if(htmlspecialchars($event_name) == "UI/UX (ITV)"){
                echo "<p>(Khusus KAPTEN) Harap klik atau salin link berikut untuk bergabung ke grup WhatsApp <a href='https://chat.whatsapp.com/JVVoAbbnGUcKUb45ei8IhI'>https://chat.whatsapp.com/JVVoAbbnGUcKUb45ei8IhI</a></p>";
            }
        ?>
        <p>Anda dapat mengakses profil anda di <a href="<?php echo $profile_url; ?>"><?php echo $profile_url; ?></a> (harap login terlebih dahulu)</p>
    </body>
</html>
