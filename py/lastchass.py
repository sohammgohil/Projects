def position(piece,loc):
    list1 = [
        'a1','a2','a3','a4','a5','a6','a7','a8',
        'b1','b2','b3','b4','b5','b6','b7','b8',
        'c1','c2','c3','c4','c5','c6','c7','c8',
        'd1','d2','d3','d4','d5','d6','d7','d8',
        'e1','e2','e3','e4','e5','e6','e7','e8',
        'f1','f2','f3','f4','f5','f6','f7','f8',
        'g1','g2','g3','g4','g5','g6','g7','g8',
        'h1','h2','h3','h4','h5','h6','h7','h8'
    ]
    list2 = ['a','b','c','d','e','f','g','h']
    list3 = []
    loc_list = []
    piece=piece.lower()
    loc = loc.lower()
     
    try :
        match piece:
            
            case 'pawn':
                a=loc[0]
                b=int(loc[1])+1
                c=a+str(b)
                list3.append(c)
                
            case 'bishop':
                a=loc[0]
                b=int(loc[1])
                c = ord(a)
                d = ord(a)

                for i in range(8):
                    if chr(c)!='h':
                        if b != 8 :
                            c+=1
                            b+=1
                            list3.append(chr(c)+str(b))
                            if chr(d)!='a':
                                d-=1
                                list3.append(chr(d)+str(b))
                    else :
                        break
                
                a=loc[0]
                b=int(loc[1])
                c = ord(a)
                d = ord(a)
                
                for i in range(8):
                    if chr(c)!='a':
                        if b != 1 :
                            c-=1
                            b-=1
                            list3.append(chr(c)+str(b))
                            if chr(d)!='h':
                                d+=1
                                list3.append(chr(d)+str(b))
                    else :
                        break
            
            case 'king':
                a=loc[0]
                b=int(loc[1])
                list3.append(a+str(b-1))
                list3.append(a+str(b+1))
                
                f=ord(a)+1
                g=ord(a)-1
                c=b-1
                for i in range(3):
                    list3.append(chr(g)+str(c))
                    list3.append(chr(f)+str(c))
                    c+=1
                
            case 'queen':
                a=loc[0]
                b=int(loc[1])
                c = ord(a)
                d = ord(a)

                for i in range(8):
                    if chr(c)!='h':
                        if b != 8 :
                            c+=1
                            b+=1
                            list3.append(chr(c)+str(b))
                            if chr(d)!='a':
                                d-=1
                                list3.append(chr(d)+str(b))
                    else :
                        break
                
                a=loc[0]
                b=int(loc[1])
                c = ord(a)
                d = ord(a)
                
                for i in range(8):
                    if chr(c)!='a':
                        if b != 1 :
                            c-=1
                            b-=1
                            list3.append(chr(c)+str(b))
                            if chr(d)!='h':
                                d+=1
                                list3.append(chr(d)+str(b))
                    else :
                        break
                
                a=loc[0]
                b=int(loc[1])
                for i in range(1,9):
                    if i!=b:
                        c=a+str(i)
                        list3.append(c)
                for i in list2:
                    if a!=i:
                        c=i+str(b)
                        list3.append(c)
            
            case 'knight':
                a=loc[0]
                b=int(loc[1])
                
                c = ord(a)+2
                d = b + 1
                list3.append(chr(c)+str(d))
                d = b - 1
                list3.append(chr(c)+str(d))
                
                c = ord(a)-2
                d = b + 1
                list3.append(chr(c)+str(d))
                d = b - 1
                list3.append(chr(c)+str(d))
                
                d = b + 2
                c = ord(a) + 1
                list3.append(chr(c)+str(d))
                c = ord(a) - 1
                list3.append(chr(c)+str(d))
                
                d = b - 2
                c = ord(a) + 1
                list3.append(chr(c)+str(d))
                c = ord(a) - 1
                list3.append(chr(c)+str(d))
            
            case 'rook':
                a=loc[0]
                b=int(loc[1])
                for i in range(1,9):
                    if i!=b:
                        c=a+str(i)
                        list3.append(c)
                for i in list2:
                    if a!=i:
                        c=i+str(b)
                        list3.append(c)
        
            case _ :
                print("Plz.. Enter valide piece name.!!")
    
    except :
        print("Plz..Enter valide input..!!!")
        
    for i in list3:
        if i in list1:
            loc_list.append(i)
            
    return loc_list

piece = input("Enter Name of Piece : ")
loc = input("Enter location of Piece : ")

loc_list = position(piece,loc)

print("\nList of Location : ")
print(loc_list)