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
            

paragraph = input("Enter Your Paragraph : ")

return_vowel_Count = func_vowel_Count(paragraph)
return_consonance_count = func_Consonance_Count(paragraph)
return_lower_character = func_lower_character(paragraph)
return_upper_character = func_upper_character(paragraph)
return_numeric = func_numeric(paragraph)
return_special_Character = func_special_Character(paragraph)
return_space_Count = func_space_Count(paragraph)
return_alpha_Count = func_alpha_Count(paragraph)
return_space_remove = func_space_remove(paragraph)

print("Total length of paragraph :",len(paragraph))
print(return_consonance_count,"return_consonance_count")
print(return_vowel_Count,"return_vowel_Count")
print(return_lower_character,"return_lower_character")
print(return_upper_character,"return_upper_character")
print(return_numeric,"return_numeric")
print(return_special_Character,"return_special_Character")
print(return_space_Count,"return_space_Count")
print(return_alpha_Count,"return_upper_character")
print(return_space_remove,"return_space_remove")