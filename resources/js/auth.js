export function login(credentials) {
    return new Promise((res, rej) => {
        axios.post('/api/login', credentials)
            .then(response => {
                res(response.data);
            })
            .catch(err => {
                rej('Wrong Email/Password')
            })
    })
}

export function getLoggedInUser() {
    const userStr = localStorage.getItem('user');

    if (!userStr) {
        return null;
    }

    return JSON.parse(userStr);
}
