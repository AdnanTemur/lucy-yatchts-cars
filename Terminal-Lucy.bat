@echo off
cd /d "D:\Software Development\Web Development\Laravel\lucy-yachts-cars"

:: Check if PowerShell is available and open Windows Terminal
if exist "C:\Windows\System32\WindowsPowerShell\v1.0\powershell.exe" (
    powershell -Command "Start-Process 'wt.exe' -ArgumentList '-d \"%CD%\"' -Verb RunAs"
) else (
    echo "Error: PowerShell not found."
)

:: Check if Visual Studio Code is installed and open it
if exist "C:\Program Files\Microsoft VS Code\Code.exe" (
    start "" "C:\Program Files\Microsoft VS Code\Code.exe"
) else (
    echo "Error: Visual Studio Code not found."
)
