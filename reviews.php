  <div class="review-container" style="
    margin-bottom: -20px;
    text-align: center;
"><h1 class="elementor-heading-title elementor-size-default">Reviews
                                                        By Our Verified Buyers.</h1></div>
    <div class="review-container" id="reviewsContainer">
        <!-- Reviews will be dynamically inserted here -->
    </div>

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            // Sample review data
            const reviewsData = [
                { customer: "Alice", rating: 5, comment: "Awesome product! Highly recommended." },
                { customer: "Bob", rating: 4, comment: "Good quality and fast shipping." },
                { customer: "Charlie", rating: 5, comment: "Excellent customer service!" },
                { customer: "David", rating: 4, comment: "Great value for money." },
                { customer: "Emma", rating: 5, comment: "Very useful and practical." },
                { customer: "Frank", rating: 4, comment: "Impressive design and functionality." },
                { customer: "Grace", rating: 5, comment: "Couldn't be happier with my purchase." },
                { customer: "Henry", rating: 4, comment: "Reliable product with great performance." },
                { customer: "Ivy", rating: 5, comment: "Perfect for my needs. Exactly as described." },
                { customer: "Jack", rating: 4, comment: "Delivered ahead of schedule. Excellent experience." }
            ];

            // Function to display reviews
            function displayReviews(reviews) {
                const reviewsContainer = document.getElementById("reviewsContainer");
                reviewsContainer.innerHTML = ""; // Clear previous content

                reviews.forEach(review => {
                    const reviewElement = document.createElement("div");
                    reviewElement.classList.add("review");
                    reviewElement.classList.add("maxwidth");
                    reviewElement.innerHTML = `
                        <h3>${review.customer}</h3>
                        <div class="rating">${"★".repeat(review.rating)}</div>
                        <div class="comment">${review.comment}</div>
                    `;
                    reviewsContainer.appendChild(reviewElement);
                });
            }

            // Display reviews
            displayReviews(reviewsData);
        });
    </script>
    
    <style>
    /* Global styles */

.review-container {
 font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    background-color: #f0f0f0;
    margin: 0;
    padding: 20px;
    color: #333;
    max-width: 800px;
    margin: 20px auto;
    
}

.review {
    margin-bottom: 20px;
    padding: 15px;
    border: 1px solid #e0e0e0;
    border-radius: 6px;
    background-color: #fff;
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
}

.review h3 {
    margin-top: 0;
    font-size: 18px;
    color: #333;
}

.rating {
    color: #fdd835; /* yellow */
    font-size: 24px;
    margin-bottom: 10px;
}

.comment {
    font-size: 14px;
    line-height: 1.6;
}

    </style>

