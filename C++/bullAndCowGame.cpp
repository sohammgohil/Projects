#include <iostream>
using namespace std;

int main()
{
    int a[5] = {14,8,12,5,6},round = 0,entryExit = 1,playTime = 0;

    while (true)
    {
        cout << "\n\n      !!-------------WELCOME-------------!!\n" << endl;

        cout << "Enter 1 for START Game and 2 for EXIT Game...!" << endl;
        cout << "Enter :- ";
        cin >> entryExit;
        
        if (entryExit == 2)
        {
            break;
        }

        playTime++;

        while (true)
        {
            int b[5], bull = 0, cow = 0, c, y = 0, flag;
            round++;
            
            while (true)
            {
                flag = 0;
                cout << "Enter your number :- ";
                cin >> c;

                for (int i = 0; i <= y; i++)
                {
                    if (c == b[i])
                    {
                        cout << "\nPlz..Enter new value..!" << endl;
                        flag = 1;
                        break;
                    }
                }

                if (flag == 0)
                {
                    b[y] = c;
                    y++;
                }

                if (y == 5)
                {
                    break;
                }

            }

            for (int i = 0; i < 5; i++)
            {
                if (a[i]==b[i])
                {
                    bull++;
                }
            }

            for (int i = 0; i < 5; i++)
            {
                for (int j = 0; j < 5; j++)
                {
                    if (a[i]==b[j])
                    {
                        cow++;
                    }
                }
            }

            cout << "\nBull is :- " << bull << endl;
            cout << "Cow is :- " << cow << "\n" << endl;

            if (bull == 5)
            {
                break;
            }
        }

        cout << "\n!!-------Atempted for Win.. :- " << round << " Times -------!!";
    }

    cout << "\n     !!-------You Play.. :- " << playTime << " Times -------!!";
    return 0;
}