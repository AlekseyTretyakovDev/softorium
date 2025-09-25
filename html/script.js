document.getElementById('test-btn').addEventListener('click', function() {
    document.getElementById('result').textContent = 'Кнопка нажата!';
});

// Загружаем список сервисов
fetch('/services.php')
    .then(response => response.json())
    .then(data => {
        const servicesList = document.getElementById('services-list');
        servicesList.innerHTML = ''; // очищаем "Загрузка..."

        for (const [name, ip] of Object.entries(data)) {
            const li = document.createElement('li');
            li.textContent = `${name}: ${ip}`;
            servicesList.appendChild(li);
        }
    })
    .catch(error => {
        console.error('Ошибка загрузки сервисов:', error);
    });