# Count of Vowels
def func_vowel_Count(paragraph):
    vwCount = 0
    vowels = ["a","A","e","E","i","I","o","O","u","U"]
    for i in paragraph:
        if i in vowels:
            vwCount+=1
    return vwCount

# Count of Consonance
def func_Consonance_Count(paragraph):
    Consonance = ['b', 'c', 'd', 'f', 'g', 'h', 'j', 'k', 'l', 'm', 'n', 'p', 'q', 'r', 's', 't', 'v', 'w', 'x', 'y', 'z', 'B', 'C', 'D', 'F', 'G', 'H', 'J', 'K', 'L', 'M', 'N', 'P', 'Q', 'R', 'S', 'T', 'V', 'W', 'X', 'Y', 'Z']
    conCount = 0
    for i in paragraph:
        if i in Consonance:
            conCount+=1
    return conCount

# Count of lower Character
def func_lower_character(paragraph):
    lowerCount = 0
    for i in paragraph:
        if i.islower()==True:
            lowerCount+=1
    return lowerCount

# Count of Upper Character
def func_upper_character(paragraph):
    upperCount = 0
    for i in paragraph:
        if i.isupper()==True:
            upperCount+=1
    return upperCount

# Count of numbers
def func_numeric(paragraph):
    numCount = 0
    for i in paragraph:
        if i.isnumeric()==True:
            numCount+=1
    return numCount

# Count of Special Character
def func_special_Character(paragraph):
    special_Character = ['!', '@', '#', '$', '%', '^', '&', '*', '(', ')', '-', '_', '+', '=', '{', '}', '[', ']', '|', '\\', ';', ':', '\'', '"', '<', '>', ',', '.', '/', '?', '`', '~']
    sp_chr_Count = 0
    for i in paragraph:
        if i in special_Character:
            sp_chr_Count+=1
    return sp_chr_Count

# Count of Space
def func_space_Count(paragraph):
    spaceCount = 0
    for i in paragraph:
        if i == " ":
            spaceCount+=1
    return spaceCount

# Count of Alphabet
def func_alpha_Count(paragraph):
    alpha = ['A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J', 'K', 'L', 'M', 'N', 'O', 'P', 'Q', 'R', 'S', 'T', 'U', 'V', 'W', 'X', 'Y', 'Z', 'a','b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j', 'k', 'l', 'm', 'n', 'o', 'p', 'q', 'r', 's', 't', 'u', 'v', 'w', 'x', 'y', 'z']
    alph_count = 0
    for i in paragraph:
        if i in alpha:
            alph_count+=1
    return alph_count

# These function removes extra space
def func_space_remove(paragraph):
    remove_space_paragraph = ""
    for i in paragraph:
        if i.isspace()==True:
            sp += 1
        else :
            sp = 0
        if sp <= 1 :
            remove_space_paragraph += i
    return remove_space_paragraph

def new_paragraph():
    print("")
    p = input("Enter Your Paragraph : ")
    return p

paragraph = input("Enter Your Paragraph : ") # for input Paragraph
print("")

menu_key = ''
while menu_key != 'E' or menu_key != 'e':
    
    print("V : Count Vowels.")
    print("C : Count Consonance.")
    print("L : Count Lower Character.")
    print("U : Count Upper Character.")
    print("A : Count Alphabet.")
    print("H : Length of Paragraph.")
    print("S : Count Special Character.")
    print("N : Count Numbers.")
    print("W : Count White Space.")
    print("R : Remove Extra Space.")
    print("P : Enter New Paragraph.")
    print("E : Exit.")
    
    menu_key = input("\nWhat do you want to do..? :- ")
    
    match menu_key :
        case 'V' | 'v':
            print("\nCount of Voweles :",func_vowel_Count(paragraph))
        case 'C' | 'c':
            print("\nCount of Consonance :",func_Consonance_Count(paragraph))
        case 'L' | 'l':
            print("\nCount of Lower Character :",func_lower_character(paragraph))
        case 'U' | 'u':
            print("\nCount of Upper Character :",func_upper_character(paragraph))
        case 'A' | 'a':
            print("\nCount of Alphabet :",func_alpha_Count(paragraph))
        case 'H' | 'h':
            print("Length of Paragraph :",len(paragraph))
        case 'S' | 's':
            print("\nCount of Special Character :",func_special_Character(paragraph))
        case 'N' | 'n':
            print("\nCount of Numbers :",func_numeric(paragraph))
        case 'W' | 'w':
            print("\nCount of White Space :",func_space_Count(paragraph))
        case 'R' | 'r':
            print("\nRemoved Extra Space and paragraph is :")
            print(func_space_remove(paragraph))
        case 'P' | 'p':
            paragraph = new_paragraph()
        case 'E' | 'e':
            break
        case _ :
            print("\nOpss..Plz Enter Valide Input..!")
    print("\n---------------------!!!!!!------------------\n")