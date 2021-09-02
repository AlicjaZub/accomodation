document.querySelectorAll('.btn').forEach((button) => {
    button.addEventListener('click', () => {
        document.querySelector('#id').value = button.value;
    })
    }
)

document.querySelector('#newId').addEventListener('click', () => {
    document.querySelector('#newId').textContent = button.value;
    }
)

document.querySelectorAll('.btn').forEach((button) => {
        button.addEventListener('click', () => {
            document.querySelector('#newId').textContent = button.value;
        })
    }
)