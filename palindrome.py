def palindrome(string):
    firstChar = string[0]
    lastCharacter = string[-1]

    if firstChar == lastCharacter:
        return "yes it is Palindrome"
    else:
        return " it is not Palindrome"

string = "lol"
print(palindrome(string))
