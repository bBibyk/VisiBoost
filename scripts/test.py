from googlesearch import search

def google_search(query, domain):
    first_result = None
    current_position = None
    referenced_page = None
    
    try :
        results = search(query, num_results=1)
        print(results)
        for idx, result in enumerate(results, start=1):
            
            if idx == 1:
                first_result = result

            if domain in result:
                current_position = idx
                referenced_page = result
                break
            
    except Exception:
        pass

    return first_result, current_position, referenced_page


print(google_search("kung fu a toulouse", "kfat.fr"))