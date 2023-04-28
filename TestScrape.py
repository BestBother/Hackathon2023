from selenium import webdriver
from selenium.webdriver.firefox.options import Options


options = Options()
url = r'https://www.snagajob.com/search?radius=20'
browser = webdriver.Firefox('C:\Users\Mousa The 14\Documents\GitHub\Hackathon2023')
browser.get(url)

browser.find_element_by_xpath('/html/body/app/div/search-page/mat-drawer-container/mat-drawer-content/div/div[2]/div[1]').click