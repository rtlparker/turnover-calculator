const incomeForm = document.getElementById("income-form");
const clearBtn = document.getElementById("clear-btn");
const resultDiv = document.getElementById("result");
const saveBtn = document.getElementById("save-btn");

incomeForm.addEventListener("submit", function(event) {
    event.preventDefault();
    calculateTurnover();
});

clearBtn.addEventListener("click", function() {
    incomeForm.reset();
    resultDiv.innerHTML = "";
    resultDiv.classList.remove("show-result");
    saveBtn.style.display = "none";
});

function calculateTurnover() {
    const formData = new FormData(incomeForm);
    fetch("calculate.php", {
        method: "POST",
        body: formData
    })
    .then(response => {
        if (!response.ok) {
            throw new Error("Network response was not ok");
        }
        return response.text();
    })
    .then(data => {
        resultDiv.innerHTML = data;
        resultDiv.classList.add("show-result");
        saveBtn.style.display = "inline";
    })
    .catch(error => {
        console.error("Error:", error);
        resultDiv.innerHTML = "An error occurred while calculating the turnover. Please try again.";
    });
}

function saveAsTextFile() {
    const resultText = resultDiv.innerText;
    const blob = new Blob([resultText], { type: "text/plain" });
    const url = URL.createObjectURL(blob);

    const a = document.createElement("a");
    a.href = url;
    a.download = "income_estimation.txt";
    document.body.appendChild(a);
    a.click();
    document.body.removeChild(a);
    URL.revokeObjectURL(url);
}

saveBtn.addEventListener("click", saveAsTextFile);
