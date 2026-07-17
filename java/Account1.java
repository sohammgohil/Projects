import java.util.Scanner;

class Transfer {
     private Account fromAccount;
     private Account toAccount;
     private double amount;

     public Transfer(Account fAccount,Account tAccount,double amt){
          fromAccount = fAccount;
          toAccount = tAccount;
          amount = amt;
     }

     

     public void printTransfer()
     {
          
     }
}

class Transection{
     private double amount;
     private boolean isWithdrawal;

     public Transection(double amt,boolean withdrowl)
     {
          amount = amt;
          isWithdrawal = withdrowl;
     }

     public void print()
     {
          if (isWithdrawal)
          {
               System.out.println("Withdrawal :- " + amount);
          }
          else {
               System.out.println("Deposit :- " + amount);
          }
     }
}

class Account{
     private String holderName;
     private static long tempAccountNumber = 1029384756;
     private double balance;
     private long accountNumber;
     private int pin;
     private int numTransaction = 0;
     private Transection[] tran = new Transection[50];
     private Transfer[] transfers = new Transfer[50];

     public Account(String n,double bal,int p)
     {
          holderName = n;
          accountNumber = tempAccountNumber;
          balance = bal;
          pin = p;
          tempAccountNumber++;
     }

     public void storeTransaction(double amount,boolean isWithdrawal)
     {
          if (numTransaction < 50)
          {
               tran[numTransaction] = new Transection(amount,isWithdrawal);
               numTransaction++;
          }
     }

     public String getName() { return holderName; }
     public long getAccountNumber() { return accountNumber; }
     public double getBalance() { return balance; }
     public int getPin() {return pin; }

     public void setName(String n) { holderName = n; }
     public void setPin(int p) { pin = p; }

     public void deposit(double amount)
     {
          balance += amount;
          storeTransaction(amount, false);
     }

     public void withdraw(double amount)
     {
          if (balance > amount) 
          {
               balance -= amount;
               storeTransaction(amount, true);
          }
          else {
               System.out.print("Insufficient amount...!!");
          }
     }

     public void transferMoney(Account tAccount,double amt)
     {
          if (balance >= amt) {
               withdraw(amt);
               tAccount.deposit(amt);
               System.out.println("Transfered..!!");        
          }
          else {
               System.out.println("Insufficient amount...!!");
          }
     }

     public void printTransection()
     {
          for(int j = 0; j < numTransaction; j++)
          {
               tran[j].print();
          }
     }

     public String toString()
     {
          String str;

          str = "\nHolder Name :- " + holderName;
          str += "\nAccount number :- " + accountNumber;
          str += "\nBalance :- " + balance;
          return str;
     }
}

class SavingAccount extends Account{
     
     private double interestRate;

     public SavingAccount(String n,double bal,int p,double rate)
     {
          super(n, bal,p);
          interestRate = rate;
     }

     public double calculateInterest()
     {
          return getBalance() * interestRate / 100;
     }

     public String toString()
     {
          return super.toString() + "\ninterest :- " + calculateInterest() + "\nAccount Type :- Saving";
     }

}

class ChackingAccount extends Account{

     private double fee;

     public ChackingAccount(String n,double bal,int p)
     {
          super(n, bal,p);
          fee = 5;
     }
     public ChackingAccount(String n,double bal,double f,int p)
     {
          super(n, bal,p);
          fee = f;
     }

     public double getTransectionFee(){ return fee; }

     public void deposit(double amount)
     {
          if (amount < fee) {
               System.out.println("Amount is lessthan fee...!!");
          }
          else {
               super.deposit(amount - fee);
          }
     }
     public void withdraw(double amount)
     {
          if (getBalance() < (amount + fee)) {
               System.out.println("Insufficient amount...!!");
          }
          else {
               super.withdraw(amount + fee);
          }
     }
     
     public String toString()
     {
          return super.toString() + "\nTransection fee :- " + fee + "\nAccount Type :- Current";
     }
}

public class Account1 {

     static Scanner scan = new Scanner(System.in);
     static int i = 0;
     public static void main(String[] args) {

          Account[] accArr = new Account[30];
          boolean temp = true;
          while (temp) {
               
               System.out.println("\n1) Openning Account");
               System.out.println("2) Withdrow");
               System.out.println("3) Deposit");
               System.out.println("4) Chack Account Balance");
               System.out.println("5) Chack Account Holder Name");
               System.out.println("6) Change Account holder Name");
               System.out.println("7) Account Info");
               System.out.println("8) Reset pin");
               System.out.println("9) Transfer Money");
               System.out.println("10) Transection History");
               System.out.println("11) Transer History");
               System.out.println("0) Exit");

               System.out.print("Enter your choice :- ");
               int choice = scan.nextInt();

               switch (choice) {

                    case 1:

                         while (temp) {

                              System.out.println("\n1) Saving Account");
                              System.out.println("2) Current Account");
                              System.out.println("0) Exit");

                              System.out.print("Enter Your Choice :- ");
                              int chooseAccount = scan.nextInt();

                              if (chooseAccount == 1) 
                              {
                                   System.out.print("Enter your name :- ");
                                   String name = scan.next();
                                   System.out.print("Enter Your Balance :- ");
                                   double bal = scan.nextDouble();
                                   System.out.print("Enter Interest rate :- ");
                                   double rate = scan.nextDouble();
                                   System.out.println("Enter pin :- ");
                                   int p = scan.nextInt();

                                   SavingAccount saving = new SavingAccount(name, bal, p, rate);
                                   accArr[i] = saving;
                                   i++;
                                   temp = false;
                              }
                              else if (chooseAccount == 2) {

                                   System.out.print("Enter your name :- ");
                                   String name = scan.next();
                                   System.out.print("Enter Your Balance :- ");
                                   double bal = scan.nextDouble();
                                   System.out.println("Enter pin :- ");
                                   int p = scan.nextInt();
                                   
                                   ChackingAccount current = new ChackingAccount(name, bal, p);
                                   accArr[i] = current;
                                   i++;
                                   temp = false;
                              }
                              else if (chooseAccount == 0) {
                                   temp = false;
                              }
                              else {
                                   System.out.println("Choose valide option..!!");
                              }
                         }
                         temp = true;
                         break;
                    
                    case 2:
                        
                         System.out.print("\nEnter Account Number :- ");
                         long num = scan.nextLong();
                         
                         for (int j = 0;j < i;j++)
                         {
                              System.out.println("enter pin :- ");
                              int p5 = scan.nextInt();
                              if (p5 == accArr[j].getPin()) 
                              {
                                   if (num == accArr[j].getAccountNumber()) 
                                   {
                                        System.out.print("Enter your amount :- ");
                                        double amt = scan.nextDouble();
                                        accArr[j].withdraw(amt);
                                   }
                              }
                              else {
                                   System.out.println("Incorrect PIN...!!");
                              }
                         }

                         break;
                         
                    case 3:

                         System.out.print("\nEnter Account Number :- ");
                         long num1 = scan.nextLong();
                         
                         for (int j = 0;j < i;j++)
                         {
                              if (num1 == accArr[j].getAccountNumber()) 
                              {
                                   System.out.print("Enter your amount :- ");
                                   double amt = scan.nextDouble();
                                   accArr[j].deposit(amt);
                              }
                         }
                         
                         break;
                    
                    case 4:

                         System.out.print("\nEnter Account Number :- ");
                         long num2 = scan.nextLong();
                         
                         for (int j = 0;j < i;j++)
                         {
                              if (num2 == accArr[j].getAccountNumber())
                              {
                                   System.out.println(accArr[j].getBalance());
                              }
                         }
                         break;

                    case 5:

                         System.out.print("\nEnter Account Number :- ");
                         long num3 = scan.nextLong();
                         
                         for (int j = 0;j < i;j++)
                         {
                              if (num3 == accArr[j].getAccountNumber()) 
                              {
                                   System.out.println(accArr[j].getName());
                              }
                         }

                         break;
                    
                    case 6:

                         System.out.print("\nEnter Account Number :- ");
                         long num4 = scan.nextLong();
                         
                         for (int j = 0;j < i;j++)
                         {
                              if (num4 == accArr[j].getAccountNumber()) 
                              {
                                   System.out.print("Enter Name :- ");
                                   String changeName = scan.next();
                                   accArr[j].setName(changeName);
                              }
                         }
                         
                         break;
                    
                    case 7:

                         System.out.print("\nEnter Account Number :- ");
                         long num5 = scan.nextLong();

                         for (int j = 0;j < i;j++)
                         {
                              if (num5 == accArr[j].getAccountNumber()) 
                              {
                                   System.out.println(accArr[j].toString());
                              }
                         }
                         
                         break;

                    case 8:
                         
                         System.out.print("\nEnter Account Number :- ");
                         long num6 = scan.nextLong();

                         for (int j = 0;j < i;j++)
                         {
                              if (num6 == accArr[j].getAccountNumber())
                              {
                                   System.out.println("Enter Current pin :- ");
                                   int p3 = scan.nextInt();
                                   if (p3 == accArr[j].getPin())
                                   {
                                        System.out.println("Enter New pin :- ");
                                        int p1 = scan.nextInt();
                                        System.out.println("ReEnter New pin :- ");
                                        int p2 = scan.nextInt();
                                       
                                        if (p1 == p2) 
                                        {
                                             accArr[j].setPin(p2);
                                             System.out.println("reset Successful");
                                        }
                                        else {
                                             System.out.println("Pin is note match..!!");
                                             System.out.println("Try Again...!!");
                                        }
                                   }
                                   else {
                                        System.out.println("Incorrect pin..!!");
                                        break;
                                   }
                              }
                              else {
                                   System.out.println("Account Number is Not found..!!");
                              }
                         }

                         break;

                    case 9:
                         
                         System.out.println("\nEnter Your account Number :- ");
                         long num7 = scan.nextLong();

                         for (int j = 0;j < i;j++)
                         {
                              if (num7 == accArr[j].getAccountNumber()) 
                              {
                                   System.out.println("Transfer to account number :- ");
                                   long num8 = scan.nextLong();
                                   System.out.println("Enter amount :- ");
                                   double amt = scan.nextDouble();

                                   System.out.println("Enter transection PIN :- ");
                                   int p4 = scan.nextInt();

                                   if (p4 == accArr[j].getPin())
                                   {
                                        for (int k = 0;k < i;k++)
                                        {
                                             if (num8 == accArr[k].getAccountNumber())
                                             {
                                                  accArr[j].transferMoney(accArr[k],amt);
                                             }
                                        }     
                                   }
                                   else {
                                        System.out.println("Incorrect PIN...!!!");
                                   }
                              }
                         }

                         break;

                    case 10:
                         //transection history
                         System.out.println("Enter Account Numebr :- ");
                         long num9 = scan.nextLong();

                         for (int j = 0;j < i;j++)
                         {
                              if (num9 == accArr[j].getAccountNumber()) {
                                   accArr[j].printTransection();
                              }
                         }
                         break;

                    case 11:
                         //transfer history
                         break;
                    
                    case 0:

                         temp = false;
                         break;

                    default:

                         System.out.println("\nEnter valide choice..!!");
                         break;
               }
          }
     }
}