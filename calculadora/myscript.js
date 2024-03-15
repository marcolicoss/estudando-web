function adicionar(character) {
            const display = document.getElementById('display');
            display.value += character;
        }

        function limpar() {
            const display = document.getElementById('display');
            display.value = '';
        }

        function calcular() {
            const display = document.getElementById('display');
            try {
                display.value = eval(display.value);
            } catch (error) {
                display.value = 'Error';
            }
        }