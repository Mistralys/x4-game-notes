# Unpacking X4 .dat game files

1) Register in the [official forums](https://forum.egosoft.com/)
2) Register your game in your account (also possible by linking your Steam account there)
3) Download the [CAT tool](https://www.egosoft.com/download/x_rebirth/bonus_en.php?download=589) ([more details](https://forum.egosoft.com/viewtopic.php?f=181&t=402452))
4) Go into the game folder
5) Create the subfolder `unpack-cat-files`
7) Extract the CAT tool into this folder
8) Create the subfolder `output` in this folder (the extracted files will go here)
9) Create the `unpack.bat` file in the folder, with the code shown below
10) Run the batch file

## Extraction batch file

```
cd ..
unpack-cat-files\XRCatTool.exe -in 01.cat -in 02.cat -in 03.cat -in 04.cat -in 05.cat -in 06.cat -in 07.cat -in 08.cat -in 09.cat -out "unpack-cat-files\output"
pause
```
