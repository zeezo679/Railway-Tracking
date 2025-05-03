<?php
use App\Database\DB;

$db = new DB("stations");
$stations = $db->select()->fetchAll();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link type="text/css" rel="stylesheet" href="https://cdn.jotfor.ms/stylebuilder/static/form-common.css?v=421d4e0
"/>
<link type="text/css" rel="stylesheet" href="https://cdn.jotfor.ms/themes/CSS/5e6b428acc8c4e222d1beb91.css?v=3.3.62585&themeRevisionID=5f7ed99c2c2c7240ba580251"/>
<link type="text/css" rel="stylesheet" href="https://cdn.jotfor.ms/css/styles/payment/payment_styles.css?3.3.62585" />
<link type="text/css" rel="stylesheet" href="https://cdn.jotfor.ms/css/styles/payment/payment_feature.css?3.3.62585" />
<link href="/assets/css/booking.css" rel="stylesheet" />
</head>
<body>

<style type="text/css" id="form-designer-style">
 
</style>

<form method="POST" action="/selecttrains"><input type="hidden" name="formID" value="251186963664569" /><input type="hidden" id="JWTContainer" value="" /><input type="hidden" id="cardinalOrderNumber" value="" /><input type="hidden" id="jsExecutionTracker" name="jsExecutionTracker" value="build-date-1746226345261" /><input type="hidden" id="submitSource" name="submitSource" value="unknown" /><input type="hidden" id="buildDate" name="buildDate" value="1746226345261" /><input type="hidden" name="uploadServerUrl" value="https://upload.jotform.com/upload" /><input type="hidden" name="eventObserver" value="1" />
  <div role="main" class="form-all">
    <ul class="form-section page-section" role="presentation">
      <li id="cid_50" class="form-input-wide" data-type="control_head">
        <div style="width:100%">
          <div class="form-header-group hasImage header-large" data-imagealign="Top">
            <div class="header-logo"><img src="https://www.jotform.com/uploads/ugurg/form_files/train-3%20(1).650073d93f61d6.36908051.png" alt="Rail Ticket Booking Form" width="752" class="header-logo-top" /></div>
            <div class="header-text httac htvam">
              <h1 id="header_50" class="form-header" data-component="header">Rail Ticket Booking Form</h1>
            </div>
          </div>
        </div>
      </li>

      <li class="form-line form-line-column form-col-3" data-type="control_dropdown" id="id_99">
  <label class="form-label form-label-top form-label-auto" id="label_99" for="input_99" aria-hidden="false"> Journey From </label>
  <div id="cid_99" class="form-input-wide" data-layout="half">
    <select class="form-dropdown" id="input_99" name="q99_journeyFrom" style="width:310px" data-component="dropdown" aria-label="Journey From">
    <?php foreach ($stations as $station): ?>
        <option value="<?= htmlspecialchars($station['station_id']) ?>">
        <?= htmlspecialchars($station['station_name']) ?>
        </option>
    <?php endforeach; ?>
    </select>
    <label class="form-sub-label" for="input_99" id="sublabel_input_99" style="min-height:13px">Station Code or full station name</label>
  </div>
</li>

<li class="form-line form-line-column form-col-4" data-type="control_dropdown" id="id_100">
  <label class="form-label form-label-top form-label-auto" id="label_100" for="input_100" aria-hidden="false"> Journey To </label>
  <div id="cid_100" class="form-input-wide" data-layout="half">
    <select class="form-dropdown" id="input_100" name="q100_journeyTo" style="width:310px" data-component="dropdown" aria-label="Journey To">
      <?php foreach ($stations as $station): ?>
        <option value="<?= htmlspecialchars($station['station_id']) ?>">
        <?= htmlspecialchars($station['station_name']) ?>
        </option>
    <?php endforeach; ?>
    </select>
    <label class="form-sub-label" for="input_100" id="sublabel_input_100" style="min-height:13px">Destination Station Code or full station name</label>
  </div>
</li>

<li class="form-line" data-type="control_number" id="id_num_passengers">
  <label class="form-label form-label-top" for="num_passengers">Number of Passengers</label>
  <div class="form-input-wide">
    <input
      type="number"
      id="num_passengers"
      name="num_passengers"
      class="form-textbox num-passengers-input"
      min="1"
      max="10"
      value="1"
      style="width:120px"
      aria-labelledby="label_num_passengers"
      required
    />
    <label class="form-sub-label" for="num_passengers" id="sublabel_num_passengers" style="min-height:13px">Enter a value between 1 and 10</label>
  </div>
</li>

      <li class="form-line" data-type="control_datetime" id="id_15"><label class="form-label form-label-left" id="label_15" for="day_15" aria-hidden="false"> Departure/Journey Date </label>
        <div id="cid_15" class="form-input" data-layout="half">
          <div data-wrapper-react="true" class="extended notLiteMode"><span class="form-sub-label-container day" style="vertical-align:top"><input class="currentDate form-textbox validate[limitDate]" id="day_15" name="q15_departurejourneyDate[day]" type="tel" size="2" data-maxlength="2" data-age="" maxLength="2" autoComplete="off" aria-labelledby="label_15 sublabel_15_day" value="02" /><span class="date-separate" aria-hidden="true"> -</span><label class="form-sub-label" for="day_15" id="sublabel_15_day" style="min-height:13px">Day</label></span><span class="form-sub-label-container month" style="vertical-align:top"><input class="form-textbox validate[limitDate]" id="month_15" name="q15_departurejourneyDate[month]" type="tel" size="2" data-maxlength="2" data-age="" maxLength="2" autoComplete="off" aria-labelledby="label_15 sublabel_15_month" value="05" /><span class="date-separate" aria-hidden="true"> -</span><label class="form-sub-label" for="month_15" id="sublabel_15_month" style="min-height:13px">Month</label></span><span class="form-sub-label-container year" style="vertical-align:top"><input class="form-textbox validate[limitDate]" id="year_15" name="q15_departurejourneyDate[year]" type="tel" size="4" data-maxlength="4" data-age="" maxLength="4" autoComplete="off" aria-labelledby="label_15 sublabel_15_year" value="2025" /><label class="form-sub-label" for="year_15" id="sublabel_15_year" style="min-height:13px">Year</label></span><span class="form-sub-label-container" style="vertical-align:top"><button type="button" class="showAutoCalendar newDefaultTheme-dateIcon focusable icon-seperatedMode" id="input_15_pick" data-component="datetime" aria-hidden="true" data-allow-time="No" data-version="v2"></button><label class="form-sub-label" for="input_15_pick" style="border:0;clip:rect(0 0 0 0);height:1px;margin:-1px;overflow:hidden;padding:0;position:absolute;width:1px;white-space:nowrap" aria-hidden="true" tabindex="-1">Date Picker Icon</label></span></div>
        </div>
      </li>
      <li class="form-line" data-type="control_divider" id="id_140">
        <div id="cid_140" class="form-input-wide" data-layout="full">
          <div class="divider" data-component="divider" style="border-bottom-width:1px;border-bottom-style:solid;border-color:#e6e6e6;height:1px;margin-left:0px;margin-right:0px;margin-top:5px;margin-bottom:5px"></div>
        </div>
      </li>
      <li class="form-line" id="passenger_fields_container">
       <!-- Passenger fields will be generated here -->
      </li>
      <li class="form-line" id="passenger_fields_container">
      <button id="input_1" type="submit" class="modern-black-submit">
        Submit
      </button>

      </li>
        
      <li style="clear:both"></li>
      <li style="display:none">Should be Empty: <input type="text" name="website" value="" type="hidden" /></li>
    </ul>
  </div>
</form>

<script>
function createPassengerFields(num) {
  const container = document.getElementById('passenger_fields_container');
  container.innerHTML = ''; // Clear previous fields

  for (let i = 1; i <= num; i++) {
    // Use the same classes and style as your form
    const block = document.createElement('div');
    block.style.width = '100%'
    block.style.margin = '20px 0';
    block.style.padding = '15px';
    block.style.border = '1px solid #e6e6e6';
    block.style.borderRadius = '8px';
    block.style.background = '#fafbfc';

    // Title
    const title = document.createElement('h3');
    title.textContent = `Passenger ${i} Details`;
    title.style.marginBottom = '12px';
    block.appendChild(title);

    // Full Name
    block.innerHTML += `
      <div class="form-input-wide" data-layout="half" style="margin-bottom:10px;width:100%">
        <label class="form-label form-label-top" for="passenger_${i}_fullname">Full Name</label>
        <input type="text" id="passenger_${i}_fullname" name="passenger_${i}_fullname" class="form-textbox" style="width:100%" required />
      </div>
    `;

    // Age
    block.innerHTML += `
      <div class="form-input-wide" data-layout="half" style="margin-bottom:10px;width:100%">
        <label class="form-label form-label-top" for="passenger_${i}_age">Age</label>
        <input type="number" id="passenger_${i}_age" name="passenger_${i}_age" class="form-number-input form-textbox" style="width:100%" min="0" max="120" required />
      </div>
    `;

    // Phone Number
    block.innerHTML += `
      <div class="form-input-wide" data-layout="half" style="margin-bottom:10px; width:100%">
        <label class="form-label form-label-top" for="passenger_${i}_phone">Phone Number</label>
        <input type="tel" id="passenger_${i}_phone" name="passenger_${i}_phone" class="form-textbox mask-phone-number" style="width:100%" placeholder="(000) 000-0000" required />
      </div>
    `;

    // Email
    block.innerHTML += `
      <div class="form-input-wide" data-layout="half" style="margin-bottom:10px; width:100%">
        <label class="form-label form-label-top" for="passenger_${i}_email">Email</label>
        <input type="email" id="passenger_${i}_email" name="passenger_${i}_email" class="form-textbox validate[Email]" style="width:100%" required />
      </div>
    `;

    container.appendChild(block);
  }
}

// Initial call for default value
document.addEventListener('DOMContentLoaded', function() {
  const numInput = document.getElementById('num_passengers');
  createPassengerFields(numInput.value);

  numInput.addEventListener('input', function() {
    let num = parseInt(numInput.value, 10);
    if (isNaN(num) || num < 1) num = 1;
    if (num > 10) num = 10;
    createPassengerFields(num);
  });
});
</script>

</body>
</html>