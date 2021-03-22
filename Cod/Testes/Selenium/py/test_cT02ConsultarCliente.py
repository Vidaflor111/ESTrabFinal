# Generated by Selenium IDE
import pytest
import time
import json
from selenium import webdriver
from selenium.webdriver.common.by import By
from selenium.webdriver.common.action_chains import ActionChains
from selenium.webdriver.support import expected_conditions
from selenium.webdriver.support.wait import WebDriverWait
from selenium.webdriver.common.keys import Keys
from selenium.webdriver.common.desired_capabilities import DesiredCapabilities

class TestCT02ConsultarCliente():
  def setup_method(self, method):
    self.driver = webdriver.Chrome()
    self.vars = {}
  
  def teardown_method(self, method):
    self.driver.quit()
  
  def test_cT02ConsultarCliente(self):
    self.driver.get("http://localhost/html/view/ConsultarCliente.html")
    self.driver.set_window_size(1936, 1066)
    assert self.driver.find_element(By.ID, "titulo").text == "Consultar Cliente"
    assert self.driver.find_element(By.CSS_SELECTOR, ".campo").text == "CPF\\\\n\\\\n\\\\nVoltar"
    elements = self.driver.find_elements(By.NAME, "ccpf")
    assert len(elements) > 0
    elements = self.driver.find_elements(By.CSS_SELECTOR, ".botao")
    assert len(elements) > 0
    elements = self.driver.find_elements(By.CSS_SELECTOR, ".botaoB")
    assert len(elements) > 0
    self.driver.find_element(By.NAME, "ccpf").click()
    self.driver.find_element(By.NAME, "ccpf").send_keys("111")
    self.driver.find_element(By.CSS_SELECTOR, ".botao").click()
    assert self.driver.find_element(By.CSS_SELECTOR, "th:nth-child(1)").text == "Nome"
    assert self.driver.find_element(By.CSS_SELECTOR, "td:nth-child(1)").text == "Teste"
    assert self.driver.find_element(By.CSS_SELECTOR, "th:nth-child(2)").text == "Email"
    assert self.driver.find_element(By.CSS_SELECTOR, "td:nth-child(2)").text == "teste@tx.com"
    assert self.driver.find_element(By.CSS_SELECTOR, "th:nth-child(3)").text == "Senha"
    assert self.driver.find_element(By.CSS_SELECTOR, "td:nth-child(3)").text == "teste"
    assert self.driver.find_element(By.CSS_SELECTOR, "th:nth-child(4)").text == "CPF"
    assert self.driver.find_element(By.CSS_SELECTOR, "td:nth-child(4)").text == "111"
    elements = self.driver.find_elements(By.CSS_SELECTOR, ".botao")
    assert len(elements) > 0
    elements = self.driver.find_elements(By.CSS_SELECTOR, ".botaoB")
    assert len(elements) > 0
  