#include <iostream>
using namespace std;

const int m = 20;

class item
{
    int itemCode[m];
    int itemPrice[m];
    int count;

public:

    int option;

    void cnt(void){ count = 0; }
    void printMenuAndGetChoice(void){

        cout<< "\nAdd item ::-- 1" << endl
            << "Display item ::-- 2" << endl
            << "Display total value ::-- 3" << endl
            << "Delete item ::-- 4" << endl
            << "Remove item ::-- 5" << endl
            << "Exit ::-- 6" << endl
            << "\nWhat is your optwion ::-- ";
        cin >> option;
    }
    void getItems(void);
    void displayItem(void);
    void sumOfPrice(void);
    void removeItem(void);
    void deleteItem(void);

    void test(void);
};

void test(void){

    int a;
    float b;

    cout << "Enter your number :- ";
    cin >> a;

    cout << "Enter your number :- ";
    cin >> b;

    cout << " cout << " << endl;
    cout << a << endl;
    cout << b << endl;
    switch (a)
    {
    case 1:
        cout << "Your number is :- 1." << endl;

        break;
    
    default:
        cout << "your name is :- sc";
        break;
    }

}

void item::getItems(void){

    int a,b;
    cout << "\nEnter your item code ::-- ";
    cin >> a;

    cout << "Enter your item Price ::-- ";
    cin >> b;

    int flage = 1;
    for (int i = 0; i < count; i++)
    {
        cout << "mnos";
        if (a == itemCode[i])
        {
            cout << "abcdef";
            itemPrice[i] += b;
            count--;
            flage = 0;
            break;
        }
    }
    if (flage == 1)
    {
        cout << "pqrst";
        itemCode[count] = a;
        itemPrice[count] = b;
    }
    count++;
}

void item::displayItem(void){

    cout << "\nITEM CODE\tITEM PRICE";
    for (int i = 0; i < count; i++)
    {
        cout << endl << itemCode[i] << "\t\t" << itemPrice[i];
    }

}

void item::sumOfPrice(void){

    int sum = 0;
    for (int i = 0; i < count; i++)
    {
        sum += itemPrice[i];
    }
    cout << "\n\nYour total sum is ::-- " << sum;

}

void item::removeItem(void){

    int code;

    cout << "Enter code of item ::-- ";
    cin >> code;

    for (int i = 0; i < count; i++)
    {
        if (itemCode[i] == code)
        {
            itemCode[i] = 0;
            itemPrice[i] = 0;
        }
    }
}

void item::deleteItem(void){

    int a;

    cout << "Enter your item code ::-- ";
    cin >> a;

    for (int i = 0; i < count; i++)
    {
        if (a == itemCode[i])
        {
            itemCode[i] = itemCode[i+1];
            itemPrice[i] = itemPrice[i];
        }
    }

    for (int i = 0; i < count; i++)
    {
        cout << itemCode[i] << endl;
    }
}

int main()
{
    item i1;
    i1.cnt();
    int flag;

    while (true)
    {
        flag = 0;
        i1.printMenuAndGetChoice();

        switch (i1.option)
        {
        case 1: i1.getItems(); break;

        case 2: i1.displayItem(); break;

        case 3: i1.sumOfPrice(); break;

        case 4: i1.removeItem(); break;

        case 5: i1.deleteItem(); break;

        case 6: flag = 1; break;

        default: cout << "Plz..Enter valide number..!!" << endl; break;

        }

        if (flag == 1)
        {
            break;
        }
    }

    return 0;
}
