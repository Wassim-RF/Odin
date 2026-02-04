export function chercheCategorie() {
    const searchInput = document.getElementById('searchCategory');
    const cards = document.querySelectorAll('.category-card');

    if (searchInput) {
        searchInput.addEventListener('input', function(e) {
            const term = e.target.value.toLowerCase().trim();
    
            cards.forEach(card => {
                const title = card.querySelector('.category-title').textContent.toLowerCase();
                
                if (title.includes(term)) {
                    card.style.display = 'block';
                } else {
                    card.style.display = 'none';
                }
            });
        });
    }
}