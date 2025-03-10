<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Finance GPT - Courses We Offer</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        /* CSS Variables */
        :root {
            --e-global-color-primary: #1976D2;
            --e-global-color-secondary: #FFC107;
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

        /* New Classes for Primary and Secondary Colors */
        .primary-color {
            color: var(--e-global-color-primary);
        }

        .secondary-color {
            color: var(--e-global-color-secondary);
        }

        /* Utility classes for background colors */
        .bg-primary {
            background-color: var(--e-global-color-primary);
        }

        .bg-secondary {
            background-color: var(--e-global-color-secondary);
        }

        /* Container */
        .container {
            width: 80%;
            margin: 0 auto;
        }

        /* Heading */
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
            padding: 25px;
            border-radius: 10px;
            width: 30%;
           // box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease, background-color 0.3s ease;
            cursor: pointer;
            text-align: center;
            height: 450px;  /* Increased height to give room for description */
            display: flex;
            flex-direction: column;
            justify-content: space-between;  /* Ensures content is distributed evenly */
        }

        .card:hover {
            background-color: #39FF14;  /* Primary Color on hover */
            transform: scale(1.05);
          //  box-shadow: 0 0 20px 5px rgba(0, 0, 255, 0.7);  /* Blue Glow on hover */
        }

        .card-icon {
            font-size: 3.5rem;  /* Increased icon size */
            color: #000000;      /* Icon color changed to black */
            margin-bottom: 15px;
        }

        .card-title {
            font-size: 1.4rem;
            font-weight: 600;
            color: #54595F;  /* Secondary color */
            margin-bottom: 15px;
        }

        .card-description {
            font-size: 1.1rem;
            color: #7A7A7A;  /* Text color */
            line-height: 1.6;
            flex-grow: 1;  /* Allows description to take available space */
        }

        .card-footer {
            margin-top: 15px;
            font-size: 1rem;
            color: #54595F;
            font-weight: 500;
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            .card {
                width: 100%;
                margin-bottom: 20px;  /* Adds some space between cards on small screens */
            }
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

        /* Custom font styles for different sections */
        .custom-font-primary {
            font-family: var(--e-global-typography-primary-font-family);
        }

        .custom-font-secondary {
            font-family: var(--e-global-typography-secondary-font-family);
        }
        .card-icon {
            font-size: 3.5rem;  /* Increased icon size */
            color: #000000;      /* Icon color */
            margin-bottom: 15px;
        }

    </style>
</head>
<body>

<div class="container">
    <!-- Heading and Introduction -->
    <div class="heading">
        <h1 class="primary-color">Courses We Offer</h1>
    </div>
    <div class="description">
        <p class="secondary-color">Welcome to Finance GPT – Your Ultimate Finance Learning Hub!</p>
        <p class="secondary-color">In the ever-evolving world of finance, staying ahead requires the right knowledge, skills, and insights. Finance GPT is your gateway to mastering finance through expertly curated course materials designed for beginners, professionals, and finance enthusiasts alike. Whether you're looking to understand the fundamentals of financial markets, sharpen your investment strategies, or explore cutting-edge financial technologies, we provide comprehensive, easy-to-understand, and up-to-date content to help you succeed.</p>
    </div>

    <!-- Cards Section Row 1 -->
    <div class="container">
    <div class="first-row">
        <!-- Card 1: Financial Institutions & Markets -->
        <div class="card" onclick="showCourseDetails('financial-institutions-markets')">
            <i class="fas fa-university card-icon"></i>  <!-- Font Awesome Icon -->
            <div class="card-title">Financial Institutions & Markets</div>
            <div class="card-description">
                This course provides an in-depth understanding of financial institutions such as banks, insurance companies, and mutual funds, as well as their critical role in global markets. Learn how these institutions help manage risk, allocate capital, and facilitate economic growth.
            </div>
            <div class="card-footer">Click to explore more</div>
        </div>

        <!-- Card 2: Stock Investing -->
        <div class="card" onclick="showCourseDetails('stock-investing')">
            <i class="fas fa-chart-line card-icon"></i>  <!-- Font Awesome Icon -->
            <div class="card-title">Stock Investing</div>
            <div class="card-description">
                Gain essential knowledge about stock market investing! This course will teach you how to analyze stocks, understand market trends, and develop strategies to build a successful investment portfolio. Perfect for those new to investing or looking to refine their skills.
            </div>
            <div class="card-footer">Click to explore more</div>
        </div>

        <!-- Card 3: Personal Finance Management -->
        <div class="card" onclick="showCourseDetails('personal-finance-management')">
            <i class="fas fa-wallet card-icon"></i>  <!-- Font Awesome Icon -->
            <div class="card-title">Personal Finance Management</div>
            <div class="card-description">
                This course covers all the essential aspects of managing your personal finances, from budgeting and saving to investing and retirement planning. Learn to take control of your financial future, reduce debt, and achieve long-term financial security.
            </div>
            <div class="card-footer">Click to explore more</div>
        </div>
    </div>
<br><br>
    <div class="second-row">
        <!-- Card 4: Investment Analysis and Policy -->
        <div class="card" onclick="showCourseDetails('investment-analysis-policy')">
            <i class="fas fa-search-dollar card-icon"></i>  <!-- Font Awesome Icon -->
            <div class="card-title">Investment Analysis and Policy</div>
            <div class="card-description">
                Learn the art and science of analyzing investments. This course introduces you to investment theories, asset valuation, and risk management techniques. Develop a solid foundation in evaluating investment opportunities to make informed decisions.
            </div>
            <div class="card-footer">Click to explore more</div>
        </div>

        <!-- Card 5: Corporate Finance -->
        <div class="card" onclick="showCourseDetails('corporate-finance')">
            <i class="fas fa-briefcase card-icon"></i>  <!-- Font Awesome Icon -->
            <div class="card-title">Corporate Finance</div>
            <div class="card-description">
                Corporate finance is crucial for any business decision. This course will provide an in-depth understanding of capital structure, corporate governance, mergers and acquisitions, and financial strategies to enhance a company's value.
            </div>
            <div class="card-footer">Click to explore more</div>
        </div>

        <!-- Card 6: Financial Accounting -->
        <div class="card" onclick="showCourseDetails('financial-accounting')">
            <i class="fas fa-calculator card-icon"></i>  <!-- Font Awesome Icon -->
            <div class="card-title">Financial Accounting</div>
            <div class="card-description">
                Master the basics of accounting and learn to interpret financial statements. This course provides an introduction to financial accounting principles and practices, including balance sheets, income statements, and cash flow analysis.
            </div>
            <div class="card-footer">Click to explore more</div>
        </div>
    </div>
</div>

<br><br>
    <!-- Course Details Section -->
    <div id="course-details" class="course-details">
        <div id="course-title" class="course-title custom-font-primary"></div>
        <div id="course-description" class="course-description custom-font-secondary"></div>

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
        alert("Show details for: " + course);
    }
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
                courseDescription = 'This course provides an in-depth understanding of financial institutions and markets, which play a vital role in the global economy. Students will explore different types of financial institutions, including commercial banks, investment banks, insurance companies, pension funds, and mutual funds, learning how they facilitate capital flow and economic stability. The course also delves into financial markets, such as money markets, bond markets, and stock exchanges, analyzing how they operate, their regulatory frameworks, and their impact on businesses and individuals. Additionally, students will examine monetary policy, interest rates, and global financial trends to understand how financial markets respond to economic changes. By the end of the course, students will be equipped with the knowledge to navigate financial institutions and market structures, making informed decisions in banking, investments, and corporate finance.';
                pdfSrc = 'pdf/financial-institutions-markets.pdf';
                break;
            case 'stock-investing':
                courseTitle = 'Stock Investing';
                courseDescription = 'This course is designed to provide students with the foundational knowledge and practical skills needed to invest in stocks successfully. It covers the fundamentals of the stock market, including how stocks are traded, how market indices function, and the factors that influence stock prices. Students will explore different investment strategies, such as value investing, growth investing, and dividend investing, and learn to analyze stocks using fundamental and technical analysis. The course also introduces concepts like risk management, portfolio diversification, and behavioral finance, helping students develop a disciplined approach to investing. Case studies, real-world market simulations, and stock portfolio management exercises will allow students to apply their knowledge in practical scenarios. By the end of the course, students will have a strong foundation in stock investing and the confidence to make informed investment decisions.';
                pdfSrc = 'pdf/stock-investing.pdf';
                break;
            case 'personal-finance-management':
                courseTitle = 'Personal Finance Management';
                courseDescription = 'Financial security and independence begin with effective personal finance management. This course teaches students how to take control of their financial future by learning the fundamentals of budgeting, saving, investing, and debt management. Topics include setting short-term and long-term financial goals, creating a personal budget, managing credit and loans, understanding taxes, and planning for retirement. Students will also learn about various investment options, such as mutual funds, bonds, and real estate, and how to build a diversified portfolio based on risk tolerance and financial objectives. The course emphasizes practical financial planning techniques, helping students make informed decisions about their money. Real-world case studies, budgeting exercises, and financial planning tools will prepare students to confidently manage their personal finances and build wealth over time.';
                pdfSrc = 'pdf/personal-finance-management.pdf';
                break;
            case 'investment-analysis-policy':
                courseTitle = 'Investment Analysis and Policy';
                courseDescription = 'Investment decisions require careful analysis and a well-defined policy to achieve financial goals. This course provides students with the tools and frameworks necessary to assess investment opportunities, develop investment strategies, and create policies that align with risk tolerance and return expectations. The course covers risk-return trade-offs, asset valuation techniques, portfolio management strategies, and capital market theories. Students will explore various asset classes, including equities, bonds, real estate, and alternative investments, learning how to analyze financial statements, industry trends, and macroeconomic factors. Additionally, the course introduces investment policy formulation, focusing on setting guidelines for asset allocation, diversification, and performance measurement. Through case studies and practical investment simulations, students will gain hands-on experience in managing investments effectively.';
                pdfSrc = 'pdf/investment-analysis-policy.pdf';
                break;
            case 'corporate-finance':
                courseTitle = 'Corporate Finance';
                courseDescription = 'Corporate finance is the backbone of business decision-making, and this course provides a comprehensive understanding of how organizations manage their financial resources to maximize value. Students will explore key concepts such as capital budgeting, financial forecasting, working capital management, and capital structure optimization. The course examines various financing options, including equity financing, debt financing, and venture capital, helping students understand how businesses raise and allocate funds. Additionally, topics such as mergers and acquisitions, dividend policy, and risk management will be covered to provide insights into corporate financial strategies. The course combines theoretical knowledge with practical applications, including financial modeling, case studies, and corporate financial decision-making simulations. By the end of the course, students will be prepared to analyze and solve complex financial problems in a corporate setting.';
                pdfSrc = 'pdf/corporate-finance.pdf';
                break;
            case 'financial-accounting':
                courseTitle = 'Financial Accounting';
                courseDescription = 'This course provides a comprehensive introduction to financial accounting, equipping students with the knowledge and skills to record, analyze, and interpret financial information. Students will learn the principles of double-entry accounting, financial statement preparation, and accounting cycle management. The course covers key financial statements such as the balance sheet, income statement, and cash flow statement, helping students understand how businesses track their financial performance. Additionally, students will explore Generally Accepted Accounting Principles (GAAP) and International Financial Reporting Standards (IFRS) to understand the regulatory frameworks governing financial reporting. Real-world case studies will illustrate ethical considerations in financial reporting and the importance of accuracy and transparency. Hands-on exercises, accounting software applications, and financial statement analysis will ensure students gain practical experience in financial accounting, preparing them for careers in accounting, auditing, and financial management.';
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
        document.querySelector('.second-row').style.display = 'flex';
        document.querySelector('.heading').style.display = 'block';
        document.querySelector('.description').style.display = 'block';
        document.getElementById('course-details').style.display = 'none';
    }
</script>

</body>
</html>
