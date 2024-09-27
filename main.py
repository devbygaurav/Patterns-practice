

# n = int(input("Kitna baada chahaiye -- "))

n = 5

#         *
#         *
#         *
#         *
#         *
#         *
#   *******
#   @
#  @@@
# @@@@@

for i in range(int(n / 2) + n):
    print(" "*int(n/2),end="")
    if(i == int((n/2) + n - 1)):
        print("*"*int((n/2) + n))
    else:
        print(" "*int((n/2) + n - 1),end="")
        print("*")

for i in range(1,n/2 + 2):
    print(" "*int(n/2 + 1 - i), end="")
    print("@"*(2*i - 1))


