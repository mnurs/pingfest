<link rel="stylesheet" href="<?php echo base_url('public/pingfest/css/tiket.css'); ?>" />
<div class="ticket">
  <div class="barcode-container">
    <svg id="barcode"></svg>
  </div>
  <div class="ticket--center">
    <div class="ticket--center--row">
      <div class="ticket--center--col">
        <span>Tiket Kamu Untuk</span>
        <strong>SEMINAR NASIONAL</strong>
      </div>
    </div>
    <div class="ticket--center--row">
      <div class="ticket--center--col">
        <span class="ticket--info--title">Tanggal dan Waktu</span>
        <span class="ticket--info--subtitle">Senin, 12 November 2022</span>
        <span class="ticket--info--content">18.00 WIB - Selesai</span>
      </div>
      <div class="ticket--center--col">
        <span class="ticket--info--title">Lokasi</span>
        <span class="ticket--info--subtitle">Nama Lokasi</span>
        <span class="ticket--info--content">Auditorium UNS</span>
      </div>
    </div>
    <div class="ticket--center--row">
      <div class="ticket--center--col">
        <span class="ticket--info--title">Ticket type</span>
        <span class="ticket--info--content">Semnas</span>
      </div>
      <div class="ticket--center--col">
        <span class="ticket--info--title">Order info</span>
        <span  class="ticket--info--content">Dipesan oleh <?php  echo $user->name ?></span>
      </div>
    </div>
  </div>
  <div class="ticket--end">
    <div><img src='<?php  echo "https://chart.googleapis.com/chart?chs=300x300&cht=qr&chl=".$user->user_id."&choe=UTF-8" ?>' title="Link to Google.com" /></div>
     <div class="logo-ping"> 
              <svg xmlns="http://www.w3.org/2000/svg" width="238.775" height="266.484"
                  viewBox="0 0 238.775 266.484">
                  <g transform="translate(-1157.573 -225.786)">
                      <path
                          d="M1376.545,282.532c-23.578-24.82-89.84-.151-148,55.1s-86.2,120.16-62.617,144.98,89.84.151,148-55.1S1400.124,307.352,1376.545,282.532Zm-65.977,134.112c-49.563,47.084-105.993,68.146-126.038,47.045s3.883-76.377,53.446-123.46,105.993-68.146,126.038-47.045S1360.131,369.561,1310.568,416.644Z" />
                      <path
                          d="M1319.153,394.746c-14.779-35.55-34.456-61.17-43.95-57.224s-5.209,35.966,9.57,71.516,34.456,61.171,43.95,57.224S1333.932,430.3,1319.153,394.746ZM1323.3,453.7c-8.132,3.38-24.817-18.16-37.269-48.111s-15.953-56.972-7.822-60.352,24.817,18.16,37.268,48.111S1331.433,450.323,1323.3,453.7Z" />
                      <path
                          d="M1324.745,292.414c-54.379-55.479-117.855-81.445-141.779-58s.766,87.433,55.144,142.912,117.855,81.445,141.778,58S1379.123,347.893,1324.745,292.414Zm46.21,131.472c-17.951,17.6-66.117-2.436-107.582-44.74s-60.528-90.862-42.577-108.457,66.117,2.436,107.583,44.74S1388.906,406.291,1370.955,423.886Z" />
                      <path
                          d="M1395.473,362.164c-7.209-23.447-57.016-28.938-111.248-12.265s-92.353,49.2-85.145,72.642,57.016,28.938,111.248,12.265S1402.681,385.61,1395.473,362.164Zm-85.184,62.388c-46.013,14.146-88.088,10.083-93.978-9.075s26.636-46.157,72.649-60.3,88.088-10.082,93.978,9.076S1356.3,410.407,1310.289,424.552Z" />
                  </g>
              </svg>
              <span>Pingfest</span> 
      </div>
  </div>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jsbarcode/3.11.5/JsBarcode.all.min.js"></script>
<script type="application/javascript"> 
  JsBarcode("#barcode",  <?php  echo $event->timestamp ?>,{
    height:120,
    width:3
  });
  document.title = 'Semnas_'+"<?php  echo $user->name ?>";
  window.print();
</script>