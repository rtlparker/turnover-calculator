<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Income Estimation Tool for internal use by rtlparker">
    <meta name="author" content="rtlparker.xyz">
    <title>Income Estimation Tool | rtlparker.xyz</title>
    <meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate">
    <meta http-equiv="Pragma" content="no-cache">
    <meta http-equiv="Expires" content="0">
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="container">
        <h1>Income Estimation Tool</h1>
        <p class="disclaimer">Disclaimer: This income estimation tool is for general informational purposes only and should not be considered official financial advice. It follows the rough guidelines for UK tax law, but it is not endorsed or reviewed by HM Revenue and Customs (HMRC). Please consult with a qualified tax professional for personalized tax advice.</p>
        <form id="income-form">
            <label for="income">Enter your rough monthly income:</label>
            <input type="number" id="income" name="income" required placeholder="e.g., 2000">

            <label for="currency">Select currency:</label>
            <select id="currency" name="currency">
                <option value="GBP">£ (GBP)</option>
                <option value="USD">$ (USD)</option>
                <option value="EUR">€ (EUR)</option>
                <option value="JPY">¥ (JPY)</option>
                <option value="CAD">$ (CAD)</option>
                <option value="AUD">$ (AUD)</option>
            </select>

            <div class="buttons-container">
                <button type="submit" class="calculate-btn" id="calculate-btn">Calculate Turnover</button>
                <button type="button" class="clear-btn" id="clear-btn">Clear</button>
            </div>
        </form>

        <div class="result" id="result"></div>
        <button id="save-btn">Save as Text File</button>

        <p class="notice">Note: We do not save or cache any data unless absolutely necessary for the calculation process. Any temporarily stored data is deleted once it's no longer needed.</p>

        <div class="version-info">
            <p><strong>Version:</strong> 1.1.0</p>
            <p><strong>Last Updated:</strong> July 30, 2023</p>
        </div>

        <div class="patch-notes">
            <h3>Patch Notes:</h3>
            <ul>
                <li>Added additional currency options.</li>
                <li>Styling improvements for better user experience.</li>
                <li>Added "Last Updated" and version information.</li>
                <li>Fixed minor bugs.</li>
            </ul>
        </div>
    </div>

    <script src="script.js" defer></script>
</body>
</html>
