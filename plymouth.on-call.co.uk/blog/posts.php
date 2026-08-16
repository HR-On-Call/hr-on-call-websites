<?php
/**
 * Blog posts registry
 *
 * Posts with a `date` in the future are automatically hidden from the blog
 * listing and the homepage until that date arrives (server time). This means
 * you can queue up posts weeks or months ahead and they'll "publish" themselves.
 *
 * Add new posts to the top of the $blogPosts array.
 * Each post needs a matching PHP file in /blog/<slug>.php
 *
 * Fields:
 *   slug        - URL slug (matches filename without .php)
 *   title       - Blog post title (H1 + <title>)
 *   excerpt     - ~140 char summary for card + meta description
 *   category    - Used for filtering / categorisation
 *   date        - ISO date (YYYY-MM-DD) used for schema + sorting + scheduling
 *   readTime    - e.g. "8 min read"
 */

$blogPosts = [
    [
        'slug'     => 'disciplinary-procedure-uk-employers-guide',
        'title'    => 'Disciplinary Procedures: A Step-by-Step Guide for UK Employers',
        'excerpt'  => 'Get a disciplinary wrong and a simple conduct issue becomes a tribunal claim. Here is how to run a fair process that follows the ACAS Code from start to finish.',
        'category' => 'Employee Relations',
        'date'     => '2026-09-11',
        'readTime' => '9 min read',
    ],
    [
        'slug'     => 'probation-periods-uk-employer-guide',
        'title'    => 'Probation Periods Done Properly (and Why They Matter More From 2027)',
        'excerpt'  => 'A probation period is only useful if you actually use it. Here is how to set one up, run meaningful reviews, and make fair decisions before the new 6 month dismissal rule bites.',
        'category' => 'HR Strategy',
        'date'     => '2026-08-28',
        'readTime' => '8 min read',
    ],
    [
        'slug'     => 'hr-support-plymouth-small-business',
        'title'    => 'HR Support for Small Businesses in Plymouth, Devon and Cornwall: What to Look For',
        'excerpt'  => 'If you run a small business in Plymouth or across Devon and Cornwall, here is how local HR support actually works, what it costs, and when it is worth bringing in.',
        'category' => 'HR Strategy',
        'date'     => '2026-08-14',
        'readTime' => '7 min read',
    ],
    [
        'slug'     => 'redundancy-process-uk-employers-guide',
        'title'    => 'Redundancy Explained: A Fair and Legal Process for UK Employers',
        'excerpt'  => 'Redundancy is one of the most heavily regulated areas of UK employment law. Here\'s how to run a fair process, avoid tribunal risk, and treat people well on the way out.',
        'category' => 'Employment Law',
        'date'     => '2026-07-31',
        'readTime' => '10 min read',
    ],
    [
        'slug'     => 'hr-outsourcing-vs-in-house-hr-smes',
        'title'    => 'HR Outsourcing vs In-House HR: Which Is Right for Your Business?',
        'excerpt'  => 'Hiring an HR Manager versus outsourcing to a consultant is one of the biggest decisions small businesses make. Here\'s an honest breakdown of when each makes sense.',
        'category' => 'HR Strategy',
        'date'     => '2026-07-03',
        'readTime' => '8 min read',
    ],
    [
        'slug'     => 'acas-early-conciliation-employers-guide',
        'title'    => 'ACAS Early Conciliation: A Complete Guide for UK Employers',
        'excerpt'  => 'When an employee lodges an ACAS notification, the clock starts ticking. Here\'s what happens next, what it costs, and how to handle it commercially.',
        'category' => 'Employment Law',
        'date'     => '2026-06-05',
        'readTime' => '9 min read',
    ],
    [
        'slug'     => 'employment-rights-act-2025-employer-guide',
        'title'    => 'The Employment Rights Act 2025: What UK Employers Need to Know Before January 2027',
        'excerpt'  => 'The Employment Rights Act 2025 brings major changes to UK employment law. The headline change – unfair dismissal protection from 6 months of service – takes effect 1 January 2027. Here\'s what to do now.',
        'category' => 'Employment Law',
        'date'     => '2026-05-08',
        'readTime' => '8 min read',
    ],
    [
        'slug'     => 'dismissing-an-employee-fairly-uk-legal-process',
        'title'    => 'Dismissing an Employee Fairly: The UK Legal Process Explained',
        'excerpt'  => 'Dismissing an employee is one of the riskiest things you can do as a UK employer. Here\'s how to do it fairly, legally, and without ending up at tribunal.',
        'category' => 'Employment Law',
        'date'     => '2026-04-15',
        'readTime' => '10 min read',
    ],
    [
        'slug'     => 'how-to-handle-employee-grievance-uk',
        'title'    => 'How to Handle an Employee Grievance: A Step-by-Step Guide for UK Employers',
        'excerpt'  => 'A formal grievance landing on your desk can feel overwhelming. This guide walks you through the ACAS Code, the process, and where most employers trip up.',
        'category' => 'Employee Relations',
        'date'     => '2026-03-12',
        'readTime' => '9 min read',
    ],
    [
        'slug'     => 'settlement-agreements-explained',
        'title'    => 'Settlement Agreements Explained: When You Need One and How Much They Cost',
        'excerpt'  => 'A settlement agreement can save you thousands in tribunal costs – but only if it\'s drafted properly. Here\'s when to use one and what to expect.',
        'category' => 'Employment Law',
        'date'     => '2026-02-18',
        'readTime' => '8 min read',
    ],
    [
        'slug'     => 'hr-support-cost-small-business-uk',
        'title'    => 'How Much Does HR Support Cost for a Small Business in the UK?',
        'excerpt'  => 'From retainers to hourly consultancy – a straightforward breakdown of what HR support actually costs for SMEs, with no jargon or hidden fees.',
        'category' => 'HR Strategy',
        'date'     => '2026-01-22',
        'readTime' => '7 min read',
    ],
];

/**
 * Return only posts whose date is today or earlier (server time).
 * Future-dated posts are hidden until their publish date.
 */
function getPublishedPosts(array $posts): array
{
    $today = date('Y-m-d');
    return array_values(array_filter($posts, function ($p) use ($today) {
        return $p['date'] <= $today;
    }));
}
