from selenium import webdriver
from selenium.webdriver.common.keys import Keys
from selenium.webdriver.common.by import By
import time


driver = webdriver.Chrome()


driver.get("http://localhost/practica3-programacion/registro2.html  ")

time.sleep(3)
nombre = driver.find_element(By.ID, "nombre")
nombre.send_keys("Francesco")

time.sleep(3)
apellido = driver.find_element(By.ID, "apellido")
apellido.send_keys("Gallo")

time.sleep(3)
email = driver.find_element(By.ID, "email")
email.send_keys("prueba1@hotmail    .com")

time.sleep(3)
contraseña = driver.find_element(By.ID, "contraseña")
contraseña.send_keys("1234")

time.sleep(3)
confirmar_contraseña = driver.find_element(By.ID, "confirmarContraseña")
confirmar_contraseña.send_keys("1234")


submit_boton = driver.find_element(By.NAME, "register")
submit_boton.click()


time.sleep(3)



driver.quit()
