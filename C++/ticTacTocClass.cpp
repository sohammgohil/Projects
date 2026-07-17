#include <iostream>
using namespace std;

class ticTacToc
{
    void readColumn(int i,int a);
    void printStruct(void);
    int checkInput(int i,int j);

public:

    char name[3][3] = {
        {' ',' ',' '},
        {' ',' ',' '},
        {' ',' ',' '}
    };

    void readRow(int a);
    int checkWinner(void);

};

void ticTacToc::printStruct(void){

    for (int i = 0; i < 3; i++)
    {
        if (i==0)
        {
            cout << endl << "\t|\t\t|" << endl;
        }
        
        for (int j = 0; j < 3; j++)
        {
            if (j==2)
            {
                cout <<  name[i][j];
            }
            else
            {
                cout <<  name[i][j] << "\t|\t";
            }
        }
        
        if (i==2)
        {
            cout << endl << "\t|\t\t|" << endl;
        }
        else
        {
            cout << endl << "\t|\t\t|"<< endl << "----------------------------------" << endl << "\t|\t\t|" << endl;
        }
    }
}

int ticTacToc::checkInput(int i,int j){

    if (name[i][j] == ' ')
    {
        return 1;
    }
    else
    {
        return 0;
    }
}

void ticTacToc::readRow(int a){
    int i;
    cout << "\n\nPlayer " << a << endl;
        cout << "Enter your row (0, 1 or 2):- ";
        cin >> i;
        if (i==0 or i==1 or i==2)
        {
            readColumn(i,a);
        }
        else
        {
            cout << "\nInvalid Input...!!\nPlease Enter valid input\n" << endl ;
            readRow(a);
        }
}

void ticTacToc::readColumn(int i,int a){

    int j;
    cout << "Enter your column (0, 1 or 2) :- ";
    cin >> j;
    if (a==1)
    {
        if (j==0 or j==1 or j==2)
        {
            if (checkInput(i,j) == 1)
            {
                name[i][j] = 'O';
                printStruct();
            }
            else
            {
                cout << "\nInvalid Input...!!\nPlease Enter valid input" << endl ;
                readRow(a);
            } 
        }
        else
        {
            cout << "Invalid Input...!!\nPlease Enter valid input" << endl ;
            readColumn(i,a);
        }
    }
    else
    {
        if (j==0 or j==1 or j==2)
        {
            if (checkInput(i,j) == 1)
            {
                name[i][j] = 'X';
                printStruct();
            }
            else
            {
                cout << "\nInvalid Input...!!\nPlease Enter valid input" << endl ;
                readRow(a);
            }
        }
        else
        {
            cout << "Invalid Input...!!\nPlease Enter valid input" << endl ;
            readColumn(i,a);
        }
    }
}

int ticTacToc::checkWinner(void){
    for (int i = 0; i < 3; i++)
    {
        if (name[i][0] == 'X' && name[i][1] == 'X' && name[i][2] == 'X')
        {
            cout << "\n\n!!... Player 2 is winner ...!!" << endl;
            return 1;
        }
        else if (name[i][0] == 'O' && name[i][1] == 'O' && name[i][2] == 'O')
        {
            cout << "\n\n!!... Player 1 is winner ...!!" << endl;
            return 1;
        }
    }
    for (int i = 0; i < 3; i++)
    {
        if (name[0][i] == 'X' && name[1][i] == 'X' && name[2][i] == 'X')
        {
            cout << "\n\n!!... Player 2 is winner ...!!" << endl;
            return 1;
        }
        else if (name[0][i] == 'O' && name[1][i] == 'O' && name[2][i] == 'O')
        {
            cout << "\n\n!!... Player 1 is winner ...!!" << endl;
            return 1;
        }
    }
    if (name[0][0] == 'X' && name[1][1] == 'X' && name[2][2] == 'X')
    {
        cout << "\n\n!!... Player 2 is winner ...!!" << endl;
        return 1;
    }
    else if (name[0][0] == 'O' && name[1][1] == 'O' && name[2][2] == 'O')
    {
        cout << "\n\n!!... Player 1 is winner ...!!" << endl;
        return 1;
    }
    else if (name[2][0] == 'X' && name[1][1] == 'X' && name[0][2] == 'X')
    {
        cout << "\n\n!!... Player 2 is winner ...!!" << endl;
        return 1;
    }
    else if (name[2][0] == 'O' && name[1][1] == 'O' && name[0][2] == 'O')
    {
        cout << "\n\n!!... Player 1 is winner ...!!" << endl;
        return 1;
    }
    return 0;
}

int main()
{
    ticTacToc t1;

    while (true)
    {
        int flag = 0,reset = 0;
        for (int i = 0; i < 3; i++)
        {
            for (int j = 0; j < 3; j++)
            {
                t1.name[i][j] = ' ';
            }
        }
        
        cout << "\n!!----------WELCOME----------!!" << endl << "\n";

        cout << "Player 1 : O" << endl << "Player 2 : X";

        for (int k = 0; k < 4; k++)
        {  
            t1.readRow(1);
            t1.checkWinner();
            if (t1.checkWinner() == 1)
            {
                flag = 1;
                break;
            }
            t1.readRow(2);
            t1.checkWinner();
            if (t1.checkWinner() == 1)
            {
                flag = 1;
                break;
            }
        }
        if (flag == 0)
        {
            t1.readRow(1);
            t1.checkWinner();
            if (t1.checkWinner() == 0)
            {
                cout << "!!... Opss..No winner ...!!" << endl;
            }
        }

        cout << "\nExit = 0\nRestart = 1\nWhat do you want to do :- ";
        cin >> reset;

        if (reset == 0)
        {
            break;
        }else if (reset == 1)
        {
            cout << "\nYour Game was restarted...!" << endl;
        }
        else
        {
            cout << "Plz..Enter valid input..!!" << endl;
        }
    }

    return 0;
}

