const personAccount = {
    firstName: "Ram",
    lastName: "",
    incomes: [
        { description: "Salary", amount: 5000 },
        { description: "Freelance", amount: 1500 }
    ],
    expenses: [
        { description: "Rent", amount: 1200 },
        { description: "Groceries", amount: 300 }
    ],

    totalIncome: function() {
        return this.incomes.reduce((sum, income) => sum + income.amount, 0);
    },

    totalExpense: function() {
        return this.expenses.reduce((sum, expense) => sum + expense.amount, 0);
    },

    accountInfo: function() {
        return `Account Holder: ${this.firstName} ${this.lastName}
Total Income: Rs.${this.totalIncome()}
Total Expenses: Rs.${this.totalExpense()}
Balance: Rs.${this.accountBalance()}`;
    },

    addIncome: function(description, amount) {
        this.incomes.push({ description, amount });
    },

    addExpense: function(description, amount) {
        this.expenses.push({ description, amount });
    },

    accountBalance: function() {
        return this.totalIncome() - this.totalExpense();
    }
};

function showAccountInfo() {
    document.getElementById("output").textContent = personAccount.accountInfo();
}

function addIncome() {
    const desc = document.getElementById("incomeDesc").value;
    const amount = parseFloat(document.getElementById("incomeAmount").value);
    if (!desc || isNaN(amount) || amount < 0) {
        alert("Enter valid description and amount.");
        return;
    }
    personAccount.addIncome(desc, amount);
    showAccountInfo();
    document.getElementById("incomeDesc").value = "";
    document.getElementById("incomeAmount").value = "";
}

function addExpense() {
    const desc = document.getElementById("expenseDesc").value;
    const amount = parseFloat(document.getElementById("expenseAmount").value);
    if (!desc || isNaN(amount) || amount < 0) {
        alert("Enter valid description and amount.");
        return;
    }
    personAccount.addExpense(desc, amount);
    showAccountInfo();
    document.getElementById("expenseDesc").value = "";
    document.getElementById("expenseAmount").value = "";
}
