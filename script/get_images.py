import os
import json

def get_image_files():
    image_folder = '../images/AroundTheVerse'
    image_files = os.listdir(image_folder)
    valid_image_files = [file for file in image_files if file.endswith(('.jpg', '.jpeg', '.png', '.gif'))]
    return json.dumps(valid_image_files)

print(get_image_files())
