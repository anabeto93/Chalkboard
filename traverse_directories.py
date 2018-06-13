"""
Author: Richard Anabeto Opoku
Purpose: To traverse directories and subdirectories as the first question on CBE aptitude test
"""

def traverse_dir(directory):
    """
    This is meant to traverse the directory while displaying the subdirectories and the files contained
    """
    print("Now traversing %s" % directory)
    #lazy load the OS
    import os

    for path, subdirs, files in os.walk(directory):
        for file_name in files:
            name = os.path.join(path, file_name)
            parent = name.split(directory)[1].split(file_name)[0]
            print("SubDir : "+str(parent)+" > File: "+file_name)
    

if __name__ == "__main__":
    directory = input("Enter the directory to traverse : ")
    traverse_dir(directory)
else:
    print("This is meant for traversing a directory that a user will provide")


