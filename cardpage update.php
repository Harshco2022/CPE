<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Finance GPT - Courses We Offer</title>
    <style>
        /* CSS Variables */
        :root {
            --e-global-color-primary: #6EC1E4;
            --e-global-color-secondary: #54595F;
            --e-global-color-text: #7A7A7A;
            --e-global-color-accent: #61CE70;
            --e-global-typography-primary-font-family: "Roboto";
            --e-global-typography-primary-font-weight: 600;
            --e-global-typography-secondary-font-family: "Roboto Slab";
            --e-global-typography-secondary-font-weight: 400;
            --e-global-typography-text-font-family: "Roboto";
            --e-global-typography-text-font-weight: 400;
            --e-global-typography-accent-font-family: "Roboto";
            --e-global-typography-accent-font-weight: 500;
        }

        /* Body styles */
        body {
            font-family: var(--e-global-typography-text-font-family);
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
            color: var(--e-global-color-text);
        }

        .container {
            width: 80%;
            margin: 0 auto;
        }

        .heading {
            text-align: center;
            margin-top: 30px;
            font-size: 2.5rem;
            color: var(--e-global-color-primary);
            font-weight: var(--e-global-typography-primary-font-weight);
        }

        .description {
            text-align: center;
            margin: 20px 0;
            font-size: 1.1rem;
            color: var(--e-global-color-secondary);
        }

        .cards-container {
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
            justify-content: space-between;
            margin-top: 30px;
        }

        .card {
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            width: 30%;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease, background-color 0.3s ease;
            cursor: pointer;
            text-align: center;
        }

        .card:hover {
            background-color: var(--e-global-color-primary);
            transform: scale(1.05);
        }

        .card-title {
            font-size: 1.3rem;
            font-weight: var(--e-global-typography-primary-font-weight);
            color: var(--e-global-color-secondary);
        }

        .card-description {
            margin-top: 10px;
            font-size: 1rem;
            color: var(--e-global-color-text);
        }

        .course-details {
            margin-top: 30px;
        }

        .course-title {
            font-size: 2.5rem;
            text-align: center;
            color: var(--e-global-color-primary);
        }

        .course-description {
            margin-top: 20px;
            text-align: center;
            font-size: 1.1rem;
            color: var(--e-global-color-secondary);
        }

        .pdf-container {
            display: flex;
            justify-content: center;
            margin-top: 30px;
        }

        .pdf-viewer {
            width: 100%;
            height: 600px;
            border: none;
        }

        /* Back button style */
        .back-button {
            display: block;
            width: 200px;
            padding: 10px;
            background-color: var(--e-global-color-accent);
            color: white;
            text-align: center;
            margin: 20px auto;
            border-radius: 5px;
            font-size: 1.1rem;
            cursor: pointer;
        }

        .back-button:hover {
            background-color: #45b158;
        }

        /* Hide course details initially */
        #course-details {
            display: none;
        }

        /* Row specific styles for two rows of cards */
        .first-row, .second-row {
            display: flex;
            gap: 20px;
            justify-content: space-between;
        }
    </style>
</head>
<body>

<div class="container">
    <!-- Heading and Introduction -->
    <div class="heading">
        <h1>Courses We Offer</h1>
    </div>
    <div class="description">
        <p>Welcome to Finance GPT – Your Ultimate Finance Learning Hub!</p>
        <p>In the ever-evolving world of finance, staying ahead requires the right knowledge, skills, and insights. Finance GPT is your gateway to mastering finance through expertly curated course materials designed for beginners, professionals, and finance enthusiasts alike. Whether you're looking to understand the fundamentals of financial markets, sharpen your investment strategies, or explore cutting-edge financial technologies, we provide comprehensive, easy-to-understand, and up-to-date content to help you succeed.</p>
    </div>

    <!-- Cards Section Row 1 -->
    <div class="first-row">
        <!-- Card 1 -->
        <div class="card" onclick="showCourseDetails('financial-institutions-markets')">
            <div class="card-title">Financial Institutions & Markets</div>
            <div class="card-description">Understanding the structure and role of financial institutions and markets.</div>
        </div>

        <!-- Card 2 -->
        <div class="card" onclick="showCourseDetails('stock-investing')">
            <div class="card-title">Stock Investing</div>
            <div class="card-description">Strategies and principles for successful stock market investing.</div>
        </div>

        <!-- Card 3 -->
        <div class="card" onclick="showCourseDetails('personal-finance-management')">
            <div class="card-title">Personal Finance Management</div>
            <div class="card-description">Managing income, expenses, savings, and investments for financial well-being.</div>
        </div>
    </div>

    <!-- Cards Section Row 2 (Initially Hidden) -->
    <div class="second-row" style="display:none;">
        <!-- Card 4 -->
        <div class="card" onclick="showCourseDetails('investment-analysis-policy')">
            <div class="card-title">Investment Analysis and Policy</div>
            <div class="card-description">Evaluating investment opportunities and formulating financial policies.</div>
        </div>

        <!-- Card 5 -->
        <div class="card" onclick="showCourseDetails('corporate-finance')">
            <div class="card-title">Corporate Finance</div>
            <div class="card-description">Financial decision-making for businesses, including capital structure and valuation.</div>
        </div>

        <!-- Card 6 -->
        <div class="card" onclick="showCourseDetails('financial-accounting')">
            <div class="card-title">Financial Accounting</div>
            <div class="card-description">Recording, analyzing, and reporting financial transactions accurately.</div>
        </div>
    </div>

    <!-- Course Details Section (Initially Hidden) -->
    <div id="course-details" class="course-details">
        <div id="course-title" class="course-title"></div>
        <div id="course-description" class="course-description"></div>

        <!-- PDF Viewer -->
        <div class="pdf-container">
            <iframe id="pdf-viewer" class="pdf-viewer" src="" title="Course PDF"></iframe>
        </div>

        <!-- Back Button -->
        <div class="back-button" onclick="goBackToCourses()">Back to Courses Page</div>
    </div>
</div>

<script>
    // Function to display course details when a card is clicked
    function showCourseDetails(course) {
        // Hide the courses and display the details section
        document.querySelector('.first-row').style.display = 'none';
        document.querySelector('.second-row').style.display = 'none';
        document.querySelector('.heading').style.display = 'none';
        document.querySelector('.description').style.display = 'none';

        document.getElementById('course-details').style.display = 'block';

        // Set course title and description dynamically based on the clicked card
        let courseTitle = '';
        let courseDescription = '';
        let pdfSrc = '';

        switch(course) {
            case 'financial-institutions-markets':
                courseTitle = 'Financial Institutions & Markets';
                courseDescription = 'This course provides an in-depth understanding of financial institutions and markets, which play a vital role in the global economy.';
                pdfSrc = 'pdf/financial-institutions-markets.pdf';
                break;
            case 'stock-investing':
                courseTitle = 'Stock Investing';
                courseDescription = 'This course is designed to provide students with the foundational knowledge and practical skills needed to invest in stocks successfully.';
                pdfSrc = 'pdf/stock-investing.pdf';
                break;
            case 'personal-finance-management':
                courseTitle = 'Personal Finance Management';
                courseDescription = 'Financial security and independence begin with effective personal finance management. This course teaches students how to take control of their financial future.';
                pdfSrc = 'pdf/personal-finance-management.pdf';
                break;
            case 'investment-analysis-policy':
                courseTitle = 'Investment Analysis and Policy';
                courseDescription = 'Investment decisions require careful analysis and a well-defined policy to achieve financial goals.';
                pdfSrc = 'pdf/investment-analysis-policy.pdf';
                break;
            case 'corporate-finance':
                courseTitle = 'Corporate Finance';
                courseDescription = 'Corporate finance is the backbone of business decision-making, and this course provides a comprehensive understanding of how organizations manage their financial resources.';
                pdfSrc = 'pdf/corporate-finance.pdf';
                break;
            case 'financial-accounting':
                courseTitle = 'Financial Accounting';
                courseDescription = 'This course provides a comprehensive introduction to financial accounting, equipping students with the knowledge and skills to record, analyze, and interpret financial information.';
                pdfSrc = 'pdf/financial-accounting.pdf';
                break;
            default:
                courseTitle = 'Course not found';
                courseDescription = 'Sorry, the course details are unavailable at this moment.';
        }

        // Set the content dynamically
        document.getElementById('course-title').textContent = courseTitle;
        document.getElementById('course-description').textContent = courseDescription;
        document.getElementById('pdf-viewer').src = pdfSrc;
    }

    // Function to go back to the courses
    function goBackToCourses() {
        document.querySelector('.first-row').style.display = 'flex';
        document.querySelector('.second-row').style.display = 'none';
        document.querySelector('.heading').style.display = 'block';
        document.querySelector('.description').style.display = 'block';
        document.getElementById('course-details').style.display = 'none';
    }
</script>

</body>
</html>
