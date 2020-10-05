<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Time unit converter</title>
  </head>
  <body>
    <label for="numberOfYears">Enter a number of years here:</label><br>
    <div class="InputTime">
      <h5>Input</h5>
      <input type="checkbox" id="iTY" name="inputTimeY">
        <label for="iTY">Years</label>
      <input type="checkbox" id="iTD" name="inputTimeD">
        <label for="iTD">Days</label>
      <input type="checkbox" id="iTH" name="inputTimeH">
        <label for="iTH">Hours</label>
      <input type="checkbox" id="iTM" name="inputTimeM">
        <label for="iTM">minutes</label>
      <input type="checkbox" id="iTS" name="inputTimeS">
        <label for="iTS">Secondes</label>
    </div>

    <div class="OutputTime">
      <h5>Output</h5>
      <input type="checkbox" id="oTY" name="outputTimeY" checked>
        <label for="oTY">Years</label>
      <input type="checkbox" id="oTD" name="outputTimeD">
        <label for="oTD">Days</label>
      <input type="checkbox" id="oTH" name="outputTimeH">
        <label for="oTH">Hours</label>
      <input type="checkbox" id="oTM" name="outputTimeM">
        <label for="oTM">minutes</label>
      <input type="checkbox" id="oTS" name="outputTimeS">
        <label for="oTS">Secondes</label>
    </div>

    <input type="number" name"numberOfYears" id="numberOfYears">
    <input type="submit" value="convert" id="convert">
    <p id="resultSeconds"></p>
    <p id="resultMinutes"></p>
    <p id="resultHours"></p>
    <p id="resultDays"></p>

    <p id="result"></p>
    <script src="main4.js"></script>
  </body>
</html>
