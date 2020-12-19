<!DOCTYPE html>

<head>
    <title>Lisa Over</title>
    <meta charset="UTF-8">
    <meta name="dcterms.creator" content="Lisa Over">
    <meta name="dcterms.title" content="Lisa Over's Online Resume and Portfolio">
    <meta name="dcterms.subject" content="">
    <meta name="dcterms.subject" content="">
    <meta name="dcterms.description" content="This site is about the education and experience of Lisa Over as a programmer and data manager.">
    <meta name="dcterms.dateCopyrighted" scheme="iso8601" content="2020-08-15">
    <meta name="keywords" content="Teaching, algebra, statistics, geometry, curriculum, philosophy">
    <link rel="stylesheet" type="text/css" href="style.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script type="text/javascript" src="scripts/nav_events.js"></script>
    <script type="text/javascript" src="scripts/topic_events.js"></script>

</head>

<body onload="init();">
    <?php include 'scripts/header_nav.php';?>
    
    <div id="topics">
        <h3></h3>
        <div class="toc">         
            <p><a href="#" id="samp-dist">Create a Sampling Distribution</a></p>
            <p><a href="#" id="mm-stat-intro">M&Ms Introduce Students to Statistics</a></p>
        </div>
    </div>
    
    <div class="clearfloat"></div>
        
    <div id="c_samp-dist" class="content">
            <H3>Create a Sampling Distribution</H3>

            <h4>Big Idea</h4>
<p>Each student will obtain and calculate the mean for eight different simple random samples of size 4 from a population of exam grades. The class will construct a histogram of sample means to illustrate a sampling distribution. The teacher will demonstrate a sampling distribution from the same population using sample size n=2. Students will consider the sampling distributions of sample means and the population distribution in light of the purpose of statistics, i.e., to make inferences about the population from sample data.</p>
<h4>Note about the Central Limit Theorem</h4>
<p>The Central Limit Theorem will be discussed in the next lesson. It is not practical to use this lesson to illustrate the Central Limit Theorem because students would have to calculate the means of multiple samples with n=25 or more. The more difficult concept here is the sampling distribution itself. This activity lays a strong foundation for students to understand the Central Limit Theorem by illustrating what a sampling distribution is. I then use computer simulations to illustrate the Central Limit Theorem.</p>
<h4>Objectives</h4>
<p>Students will be able to…</p>
<ol>
<li>Generate a sampling distribution and construct a histogram of sample means.</li>
<li>Differentiate between population distribution and sampling distribution.</li>
<li>Compare and contrast the various distributions and draw conclusions about how sample data can be used to make inferences about the population.</li>
</ol>
<h4>Rationale for Students</h4>
<p>Students will be interested in this lesson because it is highly visual and interactive and involves data they see on a regular basis. Students will benefit from this lesson as a necessary step for understanding a crucial theorem in statistics, i.e., The Central Limit Theorem.</p>
<h4>Materials</h4>
<ul>
<li>Computer, projector, and screen</li>
<li>35 copies of the activity worksheet</li>
</ul>
<h4>Lesson Files</h4>
<ul>
<li><a href="portfolio_teaching/statistics/SamplingDistribution_Activity.pdf" target="_blank">Activity Worksheet</a></li>
<li><a href="portfolio_teaching/statistics/SamplingDistribution_LessonPlan.pdf" target="_blank">LessonPlan</a></li>
<li><a href="portfolio_teaching/statistics/SamplingDistributions.pptx" target="_blank">Sampling Distributions Power Point</a></li>
<li><a href="portfolio_teaching/statistics/SamplingDistribution_histogram-243-samples.pdf" target="_blank">Sample Histogram</a></li>
</ul>
<h4>Anticipatory Set (5 minutes)</h4>
<p>(Recall)</p>
<ul>
<li>The population distribution describes how individuals vary in the population.</li>
<li>A normal distribution is a continuous distribution that is bell shaped and symmetric</li>
<li>Illustrate that samples are taken from a population (usually too large to evaluate as a whole) for the purpose of calculating statistics that can be used to make inferences about the unknown population parameters, e.g. population mean and standard deviation.</li>
</ul>
<h4>Procedure (35 minutes)</h4>
<ol>
<li>Construct a sampling distribution from a large number of samples.
<ol>
<li>Each student obtains eight simple random samples (SRS) and calculates the means (worksheet).</li>
<li>Students construct a histogram on the board; each student marks his or her eight sample means.</li>
</ol>
</li>
<li>Define sampling distribution and contrast it with population distribution.
<ol>
<li>The sampling distribution describes how sample means vary in repeated sampling.</li>
<li>A sampling distribution is the distribution of a statistic, such as the mean, drawn from a population and calculated for all possible combinations of samples of a particular size, n.</li>
</ol>
</li>
<li>Demonstrate using smaller samples, n=2, from the same population, N = 10.</li>
<li>Compare and contrast the population distribution and two sampling distributions.</li>
<li>Discuss the implications of the similarities with respect to the purpose of statistics.</li>
<li>Define the sampling distribution of the sample means:</li>
</ol>
<p>If the individual observations are normally distributed, N(μ, σ), then the distribution of sample means, with samples of size n, is normally distributed with mean equal to μ and standard deviation, called the standard error of the mean, equal to σ/sqrt(n), N(μ, σ/sqrt(n)).</p>
<h4>Closing (5 minutes)</h4>
<p>Student evaluations (exit slip)</p>
<ul>
<li>Describe an aspect of the lesson that you found interesting or practical.</li>
<li>Describe an aspect of the lesson that left you confused or questioning something that I left unanswered.</li>
<li>Was there any part of the lesson that was especially good?</li>
<li>Was there any part of the lesson that I could have handled better?</li>
</ul>
            
        </div>
  
        <div id="c_mm-stat-intro" class="content">
            <H3>M&Ms Introduce Students to Statistics</H3>

            <p>This two-day introductory lesson engages students in the data analysis process and develops their statistical thinking with a data gathering activity, a pre-reading anticipatory set of questions, a reading assignment, and a post-reading lecture with guided notes. Students in my college business statistics course gathered data by weighing packages of M&amp;Ms and counted the number of each color. Students entered the data into an online survey and analyzed the results in a spreadsheet. The applications of this student-collected data included discussions and activities about cleaning data, calculating numerical summaries, creating graphs, calculating probabilities, and determining independence.</p>
<p>When I first did this activity, I used only plain M&amp;Ms. If you have enough students (to gather a large enough sample for analysis), I recommend using both plain and peanut M&amp;Ms. I had my students gather data on peanut M&amp;Ms during another class period but the novelty had worn off by then. Gathering data on both types of M&amp;Ms allows you to explore more concepts than with just one type. See <a href="#explore">Concepts to Explore with the M&amp;M Data</a> below for ideas of how to use this dataset.</p>
<h4>Objectives</h4>
<p>After these lessons, students will be able to...</p>
<ul>
<li>Gather and record data</li>
<li>Define basic statistical terminology</li>
<li>Apply terminology to the context of the activity</li>
</ul>
<h4>Materials</h4>
<ul>
<li>Kitchen scale that measures to at least two decimal places</li>
<li>Fun size packages of plain and peanut M&amp;Ms (enough for each student to have at least 1 package)</li>
<li>Copies of the anticipatory set of questions and post-reading guided notes (one set per student)</li>
</ul>
<p><em>Note:</em> I also have Hershey Kisses on hand for students who cannot eat M&amp;Ms due to allergies. Eating the M&amp;Ms is a perk of the activity.</p>
<h4>Data Gathering Activity (Day 1)</h4>
<p>This data gathering activity engages students in the data analysis process on the first day of class. Students will weigh the package contents and count the number of M&amp;Ms of each color. The worksheet has a table for recording the data. Students can also enter the data into a survey or spreadsheet. I set up a survey in StatCrunch designed to record the weight and color distribution of one package of M&amp;Ms. With this survey, students can submit more than once if they have more than one package of M&amp;Ms. <a href="https://www.statcrunch.com/5.0/survey.php?surveyid=16239&amp;code=OGTJE" target="Blank">Click here to check out how I set it up</a> and design your own using StatCrunch or another survey platform. StatCrunch creates a table with the variables Type, Weight in Ounces, Brown, Yellow, Red, Orange, Green, and Blue. Each record (row) stores the data of one package of M&amp;Ms.</p>
<h4>Pre-reading Anticipatory Set of Questions (Day 1)</h4>
<p>The pre-reading questions introduces basic statistical terminology from the context of the activity.</p>
<h4>Reading Assignment (Homework to be completed before Day 2)</h4>
<p>The terminology is from the first chapter of <em>Business Statistics: Communicating with Numbers</em> by Jaggia/Kelly. The homework I assigned was to read chapter 1 using the LearnSmart technology by the publisher McGraw-Hill.</p>
<h4>Post-reading Lecture with Guided Notes (Day 2)</h4>
<p>On day 2, I discussed the terminology using the M&amp;M activity and other examples. I projected the key on the board but encouraged students to fill in their guided notes with whatever they thought would help them remember the definition. Writing the definition word for word is not necessarily effective.</p>
<h4>Lesson Files</h4>
<p><a href="portfolio_teaching/statistics/Pre-Reading-Anticipatory-Set.docx">Data Terminology with M&amp;Ms</a>
    <br />
    <a href="portfolio_teaching/statistics/Terminology-Guided-Notes.docx">Terminology Guided Notes</a>
    <br />
    <a href="portfolio_teaching/statistics/Terminology-Guided-Notes-Key.docx">Terminology Guided Notes Key</a></p>
<p> </p>
<h4><a name="explore"></a>Concepts to Explore with the M&amp;M Data</h4>
<ul>
<li>Cleaning data - It is very likely that someone is going to enter bad data (typos, misunderstanding instructions, or just being funny) and this is a good opportunity to discuss whether records with questionable data should be ignored, fixed, or deleted).</li>
<li>Numerical Summaries - Collecting weights and color counts allows students to create both categorical and continuous summaries (proportions and means).</li>
<li>Graphs - I used this dataset to demonstrate creating bar and pie charts and histograms in Excel. Students compared the distribution of weight and colors for plain and peanut M&amp;Ms.</li>
<li>Probability - I used this dataset to illustrate relative frequency, probability, and independence. What is the proportion of red M&amp;Ms? That <em>depends</em> on what type of M&amp;M you are talking about.</li>
</ul>
            
        </div>
        
</body>

</html>