@ECHO OFF
SETLOCAL EnableDelayedExpansion
SETLOCAL

CALL g++ src\*.cpp -o %USERPROFILE%\Desktop\build.exe
g++ src\*.cpp -o %USERPROFILE%\Desktop\build.exe 2>NUL || EXIT
ECHO Build reussi
SET /P CHOIX=Executer l'executable ? [Y/n]
IF "!CHOIX!"=="Y" (
  CALL %USERPROFILE%\Desktop\build.exe
)

IF "!CHOIX!"=="y" (
  CALL %USERPROFILE%\Desktop\build.exe
)

IF "!CHOIX!"=="" (
  CALL %USERPROFILE%\Desktop\build.exe
)
