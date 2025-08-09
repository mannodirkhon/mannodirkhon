-- Demo SQL dump for Apex Facade WordPress site
-- Import into an empty WordPress database after installing WordPress.
-- This creates a sample project post and taxonomy term.

INSERT INTO wp_posts (ID, post_author, post_date, post_content, post_title, post_status, post_name, post_type)
VALUES (100, 1, NOW(), 'Demo project description.', 'Sample Project', 'publish', 'sample-project', 'project');

INSERT INTO wp_terms (term_id, name, slug, term_group) VALUES (200, 'Residential', 'residential', 0);
INSERT INTO wp_term_taxonomy (term_taxonomy_id, term_id, taxonomy, description, parent, count)
VALUES (200, 200, 'project_type', '', 0, 1);
INSERT INTO wp_term_relationships (object_id, term_taxonomy_id) VALUES (100, 200);
