@echo off
cd /d "D:\Software Development\Web Development\Laravel\lucy-yachts-cars"
if exist "C:\Windows\System32\WindowsPowerShell\v1.0\powershell.exe" (
    powershell -Command "Start-Process 'wt.exe' -ArgumentList '-d \"%CD%\"' -Verb RunAs"
) else (
    echo "Error: PowerShell not found."
)

