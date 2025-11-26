/* Общие стили */
* {
margin: 0;
padding: 0;
box-sizing: border-box;
}

body {
font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif;
background-color: #FFFFFF;
color: #212121;
line-height: 1.6;
}

.container {
max-width: 1200px;
margin: 0 auto;
padding: 0 20px;
}

/* Заголовок */
.header {
padding: 20px;
text-align: center;
}

.title {
font-size: 28px;
font-weight: bold;
color: #E53935;
margin-bottom: 8px;
}

.subtitle {
font-size: 16px;
color: #757575;
}

/* Контейнер для модуля Tourvisor */
.webview-container {
height: 600px;
margin: 10px;
border-radius: 12px;
overflow: hidden;
background-color: #F8F9FA;
position: relative;
}

.tv-search-form, .tv-hot-tours {
width: 100% !important;
min-height: 500px;
}

/* Индикатор загрузки */
.loading {
position: absolute;
top: 0;
left: 0;
width: 100%;
height: 100%;
display: flex;
flex-direction: column;
justify-content: center;
align-items: center;
background-color: #F8F9FA;
}

.spinner {
width: 40px;
height: 40px;
border: 4px solid rgba(229, 57, 53, 0.2);
border-left: 4px solid #E53935;
border-radius: 50%;
animation: spin 1s linear infinite;
margin-bottom: 10px;
}

@keyframes spin {
0% { transform: rotate(0deg); }
100% { transform: rotate(360deg); }
}

.loading p {
color: #757575;
font-size: 16px;
}

/* Информационная секция */
.info-section {
background-color: #F8F9FA;
margin: 20px;
border-radius: 12px;
padding: 20px;
}

.info-title {
font-size: 18px;
font-weight: bold;
color: #212121;
margin-bottom: 16px;
text-align: center;
}

/* Шаги поиска */
.info-steps {
display: flex;
flex-direction: column;
gap: 12px;
}

.step {
display: flex;
align-items: center;
}

.step-number {
width: 30px;
height: 30px;
border-radius: 15px;
background-color: #E53935;
display: flex;
justify-content: center;
align-items: center;
margin-right: 12px;
flex-shrink: 0;
}

.step-number-text {
color: #FFFFFF;
font-size: 14px;
font-weight: bold;
}

.step-text {
font-size: 14px;
color: #757575;
}

/* Особенности горящих туров */
.features {
display: flex;
flex-direction: column;
gap: 16px;
}

.feature {
background-color: #FFFFFF;
border-radius: 8px;
padding: 16px;
}

.feature-title {
font-size: 16px;
font-weight: bold;
color: #E53935;
margin-bottom: 4px;
}

.feature-text {
font-size: 14px;
color: #757575;
line-height: 18px;
}

/* Адаптивность */
@media (min-width: 768px) {
.info-steps {
flex-direction: row;
justify-content: space-between;
}

.step {
flex-direction: column;
text-align: center;
flex: 1;
}

.step-number {
margin-right: 0;
margin-bottom: 8px;
}

.features {
flex-direction: row;
}

.feature {
flex: 1;
}
}