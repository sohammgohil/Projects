#include <iostream>
#include <string>
using namespace std;

class transaction
{
    int amount;
    bool isWithdrawal;

public:

    transaction(int amt = 0, bool withdrawal = true) : amount(amt), isWithdrawal(withdrawal) {}
    void print();

};

class account
{
    string name;
    long int acNumber;
    float balance;
    int numTransaction = 0;
    transaction recordOfTransactions[15];

    void storeTransaction(int amount,bool isWithdrawal);

public:

    account() : name("Unknow"), acNumber(0), balance(0) {}
    account(string Name,long int Num,float bal) : name(Name), acNumber(Num), balance(bal) {}
    
    string getName() const { return name; }
    long int getAcNumber() const { return acNumber; }
    float getBalance() const { return balance; }
    int getNumOfTransaction() const { return numTransaction; }

    void setName(string rName) { name = rName; }
    void setBalance(float amount) { balance = amount; }

    void deposit(float);
    void withdraw(float);

    friend void transferMoney(account &fromAccount, account &toAccount, float);

    void printInfo();
    void printTransactions();

};

class savingAccount : public account
{
    float interestRate;

public:
    savingAccount(string holderName,long int num,float bal,float intRate) :account(holderName,num,bal), interestRate(intRate) {}

    float calculateInterest();
    void addInterest();
    void depositSaving(float amount);
    void withdrowSaving(float amount);
    void printInfoSaving();
};

class currentAccount : public account
{
    float transectionFee;

public:

    currentAccount( string holderName, long int num, float bal) : account( holderName, num, bal), transectionFee(5) {}
    currentAccount( string holderName, long int num, float bal, float fee) : account( holderName, num, bal), transectionFee(fee) {}

    void depositCurrent(float amount);
    void withdrowCurrent(float amount);
    void printInfoCurrent();
};

void transaction::print()
{
    if (isWithdrawal)
    {
        cout << "Withdrawal :- " << amount << endl;
    }
    else
    {
        cout << "Deposit :- " << amount << endl;
    }
}

void account::storeTransaction(int amount,bool isWithdrawal)
{
    if (numTransaction < 15)
    {
        recordOfTransactions[numTransaction] = transaction(amount,isWithdrawal);
        numTransaction++;
    }
}

void account::deposit(float amount)
{
    balance += amount;
    storeTransaction(amount,false);
}

void account::printTransactions()
{
    for (int i = 0; i < 15; i++)
    {
        if (i == numTransaction)
        {
            break;
        }
        recordOfTransactions[i].print();
    }
}

void account::withdraw(float amount)
{
    if (amount < balance)
    {
        balance -= amount;
        storeTransaction(amount,true);
    }
    else
    {
        cout << "Insufficient Amount...!!" << endl;
    }
}

void account::printInfo()
{
    cout << "Account Holder Name :- " << name << endl;
    cout << "Account Number :- " << acNumber << endl;
    cout << "Current Balance :- $" << balance << endl;
    cout << "Number of transactions :- " << numTransaction << endl;
}

float savingAccount::calculateInterest()
{
    float interest;
    interest = getBalance() * interestRate / 100;

    return interest;
}

void savingAccount::addInterest()
{
    setBalance(getBalance() + calculateInterest());
}

void savingAccount::depositSaving(float amount)
{
    deposit(amount);
}

void savingAccount::withdrowSaving(float amount)
{
    withdraw(amount);
}

void savingAccount::printInfoSaving()
{
    printInfo();
}

void currentAccount::depositCurrent(float amount)
{
    deposit(amount - transectionFee);
}

void currentAccount::withdrowCurrent(float amount)
{
    withdraw(amount + transectionFee);
}

void currentAccount::printInfoCurrent()
{
    printInfo();
    cout << "Transection Fee :- " << transectionFee << endl;
}

void transferMoney(account &fromAccount, account &toAccount, float amt)
{
    if (amt < fromAccount.getBalance())
    {
        fromAccount.setBalance(fromAccount.getBalance() - amt);
        fromAccount.storeTransaction(amt,true);
        toAccount.setBalance(toAccount.getBalance() + amt);
        toAccount.storeTransaction(amt,false);
    }
}
